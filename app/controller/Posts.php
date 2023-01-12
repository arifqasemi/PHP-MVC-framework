<?php

/**
 * Posts controller
 *
 * PHP version 5.4
 */
namespace app\controller;
class Posts extends \core\controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        echo 'Hello from the index action in the Posts controller!';
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNew()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function edite()
        {
            echo 'Hello from the edit action in the Posts controller!';
            echo '<p>Route parameters: <pre>' .
                 htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
        }
}
