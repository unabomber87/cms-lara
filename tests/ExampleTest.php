<?php

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
        $this->visit('/')
            ->see('MY BLOG');
    }
}
