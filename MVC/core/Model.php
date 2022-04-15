<?php
namespace Core;
class Model{
    private static $link;
    public function __construct(){
        if (!self::$link){
            self::$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            mysqli_query(self::$link, "SET NAMES 'utf-8'");
        }
    }
    protected function findOne($query){
        //
    }
    protected function findMany($query){
        //
    }
}