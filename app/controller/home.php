<?php
namespace app\controller;
use \core\view;


class Home extends \core\controller
{

   
    public function hello()
    {
        echo 'Hello from the index action in the Home controller!';
    }


    public function index(){
      view::renderTemplate('home/index.html', ['name'=>'arif', 'colors'=> ['red','blue', 'black']]);
    }
}
