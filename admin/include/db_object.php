<?php

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 9/6/2016
 * Time: 2:41 PM
 */
class Db_object
{

    public static function find_all(){

        $result = self::find_this_query("SELECT * FROM ". self::$db_table . " ");

        return $result;

    }



    public static function find_by_id($id){

        $result = self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE id = $id LIMIT 1");

        return !empty($result) ? array_shift($result) : false;

        /*$found_user = mysqli_fetch_array($result);
        
        return $found_user;*/

        //return $result;

    }


    public static function find_this_query($sql){

        global $database;

        $result = $database->query($sql);

        $the_object_array = array();

        while ($row = mysqli_fetch_array($result)){

            $the_object_array[] = self::instantiation($row);

        }

        return $the_object_array;


    }


    public static function instantiation($the_record){


        $the_object = new self;

        foreach ($the_record as $the_attribute => $value){

            if ($the_object->has_the_attribute($the_attribute)){

                $the_object->$the_attribute = $value;

            }


        }


        return $the_object;

    }


    private function has_the_attribute($the_attribute){


        $object_properties = get_object_vars($this);

        return array_key_exists($the_attribute , $object_properties);


    }



}