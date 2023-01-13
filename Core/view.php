<?php


namespace core;


class View {
    public static function render($view, $arg = []){
      extract($arg,EXTR_SKIP);
     $file = "../App/views/$view";

     if(is_readable($file)){
        require $file;
     }else{
        echo "$file not found";
     }
    }


   //  public static function renderTemplate($template, $arg){

   //    static $twig = null;
   //    if($twig === null){
   //       $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/App/views');
   //         $twig = new \Twig_Environment($loader);
   //    }else{
   //       echo $twig->render($template,$arg);
   //    }

   //  }
    public static function renderTemplate(string $template, array $args = [])
    {
        static $twig = null;
 
        if ($twig === null)
        {
            $loader = new \Twig\Loader\FilesystemLoader('../App/views');
            $twig = new \Twig\Environment($loader);
        }
 
        echo $twig->render($template, $args);
    }
}
