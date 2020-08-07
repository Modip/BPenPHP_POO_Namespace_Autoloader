<?php


class Autoloader
{
    static function register ()
    {
        spl_autoload_register (array(__CLASS__, "autoload"));  
    }
    static function autoload($class)
    {
        //Utilisation pour changement des slash Namespace
        $class = str_replace("\\", "/", $class);
        // echo $class;

        // Avec utilisation desNamespace
        
        if (file_exists("../../".str_replace("\\","/",$class.".php")))
        {
            require_once ("../../".str_replace("\\","/",$class.".php"));
        }

    }
    
}
Autoloader::register();




/*
    class Autoloader
    {
        static function register()
        {
            spl_autoload_register(array(__CLASS__,"autoload"));
        }

        static function autoload($class)
        {
            $class = str_replace('\\','/', $class);
            echo $class;

            require_once "$class.".php.";
        }
    }
    Autoloader::register();
*/



         
      /* if (file_exists("src/entities/".$class.".php"))
       {
            require_once "src/entities/".$class.".php";
        }
        
        else if (file_exists("src/models/".$class.".php"))
        {
            require_once "src/models/".$class.".php";
        }

        */


                //Peut etre utiliser si on appel autoload au niveau de index
       /* else if (file_exists(str_replace("\\","/",$class.".php")))
        {
            require_once (str_replace("\\","/",$class.".php"));
        }*/
        


?>
