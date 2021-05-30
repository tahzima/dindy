<?php
    class Database{
        static public function connect(){
            $db = new PDO("mysql:host=localhost;dbname=dindy","root","");
            $db->exec("set names utf8");
            return $db;
        }
    }
?>