<?php


require_once '../vendor/autoload.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';
// spl_autoload_register(function($class){
//     $root = dirname(__DIR__);
//     $file = $root .'/'. str_replace('\\','/', $class). '.php';
//     if(is_readable($file)){
//         require  $root .'/'. str_replace('\\','/', $class). '.php';
//     }
// });

$route = new Core\Router();

// $route->add('', ['controller' => 'Home', 'action' => 'index']);
// $route->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$route->add('', ['Controller' => 'home', 'action' => 'index']);
$route->add('{Controller}/{action}');
$route->add('{Controller}/{id:\d+}/{action}');
// $route->add('admin/{action}/{controller}');
    
// Display the routing table
// echo '<pre>';
// //var_dump($router->getRoutes());
// echo htmlspecialchars(print_r($route->getRoutes(), true));
// echo '</pre>';

$route->dispatch($_SERVER['QUERY_STRING']);

// if ($route->match($url)) {
    // echo '<pre>';
    // var_dump($route->getParams());
    // echo '</pre>';
// } else {
//     echo "No route found for URL '$url'";
// }

