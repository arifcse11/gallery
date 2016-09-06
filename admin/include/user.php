<?php

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 8/28/2016
 * Time: 11:44 AM
 */


class User extends Db_object
{
    
    protected static $db_table = 'users';

    protected static $db_table_fields = array('username' , 'password', 'first_name', 'last_name');

    public $id;
    
    public $username;
    
    public $password;
    
    public $first_name;
    
    public $last_name;

    public static function verify_user($username , $password){

        global $database;

        $username = $database->escape_string($username);

        $password = $database->escape_string($password);


        $sql = "SELECT * FROM " .self::$db_table ;

        $sql .=" WHERE username = '{$username}' ";

        $sql .="AND password = '{$password}'";


        $result = self::find_this_query($sql);

        return !empty($result) ? array_shift($result) : false;

    }


}