<?php

namespace App\Services;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuGen extends Menu
{
    /**
     * Display menu.
     *
     * @param string      $menuName
     * @param string|null $type
     * @param array       $options
     *
     * @return string
     */
    public static function display($menuName, $type = null, $options = [])
    {
        // GET THE MENU
        $menu = static::where('name', '=', $menuName)->first();
        $menuItems = [];

        if (isset($menu->id)) {
            // GET THE ROOT MENU ITEMS
            $menuItems = MenuItem::where('menu_id', '=', $menu->id)
                ->where('parent_id', '=', null)
                ->orderBy('order', 'ASC')
                ->get();
        }

        // Convert options array into object
        $options = (object) $options;

        switch ($type) {
        case 'admin':
            return parent::buildAdminOutput($menuItems, '', $options);

        case 'admin_menu':
            return parent::buildAdminMenuOutput($menuItems, '', $options, request());

        case 'bootstrap':
            return parent::buildBootstrapOutput($menuItems, '', $options, request());
        }

        return empty($type)
        ? self::buildOutput($menuItems, '', $options, request())
        : parent::buildCustomOutput($menuItems, $type, $options, request());
    }

    /**
     * Create default menu.
     *
     * @param \Illuminate\Support\Collection|array $menuItems
     * @param string                               $output
     * @param object                               $options
     * @param \Illuminate\Http\Request             $request
     *
     * @return string
     */
    public static function buildOutput($menuItems, $output, $options, Request $request)
    {
        if (empty($output)) {
            $output = '<ul class="nav navbar-nav">';
        } else {
            $output .= '<ul>';
        }

        foreach ($menuItems as $item) {
            $li_class = '';
            $a_attrs = '';
            if ($request->is(ltrim($item->url, '/')) || $item->url == '/' && $request->is('/')) {
                $li_class = ' class="active"';
            }

            $children_menu_items = MenuItem::where('parent_id', '=', $item->id)->orderBy('order', 'ASC')->get();

            $icon = '';
            if (isset($options->icon) && $options->icon == true) {
                $icon = '<i class="'.$item->icon_class.'"></i>';
            }

            $styles = '';
            if (isset($options->color) && $options->color == true) {
                $styles = ' style="color:'.$item->color.'"';
            }

            if (isset($options->background) && $options->background == true) {
                $styles = ' style="background-color:'.$item->color.'"';
            }

            $output .= '<li'.$li_class.'><a href="'.$item->url.'" target="'.$item->target.'"'.$styles.'>'.$icon.$item->title.'</a>';

            if (count($children_menu_items) > 0) {
                $output = self::buildOutput($children_menu_items, $output, $options, $request);
            }

            $output .= '</li>';
        }

        $output .= '</ul>';

        return $output;
    }
}
