<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 3/11/2018
 * Time: 8:07 PM
 */

class Session {
    public static function startSession(){
        if(!Session::isSessionStart()){
            session_start();
        }
    }

    public static function isSessionStart(){
        if(isset($_SESSION['login'])){
            return true;
        } else{
            return false;
        }
    }
}