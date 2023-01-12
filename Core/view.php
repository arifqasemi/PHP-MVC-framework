<?php


namespace core;


class View {
    public static function render($view, $arg = []){
      extract($arg,EXTR_SKIP);
     $file = "../app/views/$view";

     if(is_readable($file)){
        require $file;
     }else{
        echo "$file not found";
     }
    }


    public static function renderTemplate($template, $arg){

      static $twig = null;
      if($twig === null){
         $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/app/views');
           $twig = new \Twig_Environment($loader);
      }else{
         echo $twig->render($template,$arg);
      }

    }
   //  public static function renderTemplate(string $template, array $args = [])
   //  {
   //      static $twig = null;
 
   //      if ($twig === null)
   //      {
   //          $loader = new \Twig\Loader\FilesystemLoader('../app/views');
   //          $twig = new \Twig\Environment($loader);
   //      }
 
   //      echo $twig->render($template, $args);
   //  }
}
