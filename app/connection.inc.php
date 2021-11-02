<?php

class connection{
    private static $connection;
    
    public static function open_connection(){
        if(!isset(self::$connection)){
            try {
                include_once 'config.inc.php';
                self::$connection = new PDO('mysql:host='.SERVER_NAME.'; dbname='.DATABASE_NAME
                , USER_NAME, PASSWORD);
                self::$connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection -> exec("SET CHARACTER SET utf8");
            } catch (PDOException $ex) {
                print "ERROR: " . $ex -> getMessage() . "<br>";
                die();
            }
        }
    }

    public static function close_connection(){
        if(isset(self::$connection)){
            self::$connection = null;
        }
    }

    public static function get_connection(){
        return self::$connection;
    }
}