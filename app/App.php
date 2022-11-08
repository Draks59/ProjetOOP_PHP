<?php
namespace App;
class App{

    const DB_NAME = 'beers';
    const DB_USER = 'root';
    const DB_PWD = 'toor';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDb(){
        if( self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PWD, self::DB_HOST);
        }
        return self::$database;
    }
}