<?php

/**
 * Created by PhpStorm.
 * User: Arif
 * Date: 8/28/2016
 * Time: 7:00 PM
 */
class Session
{

    public  $user_id;

    private $signed_in = false;


    function __construct()
    {
        session_start();

        $this->check_the_login();

    }


    public function is_signed_in(){

        return $this->signed_in;

    }

    public function login($user){

        if ($user){

            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;

        }

    }


    public function logout(){

        unset($this->user_id);

        unset($_SESSION['user_id']);

        $this->signed_in = false;

    }


    private function check_the_login(){

        if (isset($_SESSION['user_id'])){

            $this->user_id = $_SESSION['user_id'];

            $this->signed_in = true;


        }


        else{

            unset($this->user_id);

            $this->signed_in = false;


        }


    }


}


$session = new Session();