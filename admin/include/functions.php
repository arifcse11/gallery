<?php
/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 8/28/2016
 * Time: 5:47 PM
 */



   function __autoload($class){

       $class = strtolower($class);

       $path = "include/{$class}.php";


       if (file_exists($path)){


           require_once ($path);


       }

       else{

           die("The file named {$class}.php not found man");

       }



   }


  function redirect($location){


      header("Location: $location");


  }