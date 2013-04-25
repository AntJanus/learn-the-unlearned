<?php

class SingletonClass
{
    private static $_instance = null;
    private function __construct() { }
    public function __clone() {
        trigger_error( "Cannot clone instance of Singleton pattern ...", E_USER_ERROR );
    }
    public static function getInstance()
    {
        if( !is_object(self::$_instance) )
            self::$_instance = new self;

        return self::$_instance;
    }
}

$configs = SingletonClass::getInstance();
?>