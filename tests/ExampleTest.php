<?php

use TCG\Voyager\Models\Post;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    /*
     * A basic functional test example.
     *
     * @return void
     */
    use DatabaseMigrations;

    public function testBasicExample()
    {
        //$user = factory(User::class)->create();
        //var_dump($user);
        $post = factory(Post::class)->create();
        //$user = factory(User::class, 4)->make();
        //$user = User::all();
        //var_dump($user);
        $this->visit('/')
            ->see('MY BLOG');
    }
}
