<?php
namespace App\Controller;
use \Core\view;


class Home extends \Core\Controller
{

   
    public function hello()
    {
        echo 'Hello from the index action in the Home controller!';
    }


    public function index(){
      view::render('home/index.html', ['name'=>'arif', 'colors'=> ['red','blue', 'black']]);
    }
}
