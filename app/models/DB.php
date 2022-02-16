<?php
    class DB {
        private static $_db = null;
        private static $_search = null;

        public static function getInstence() {
            if(self::$_db == null)
                self::$_db = new PDO('mysql:host=localhost;dbname=u0129954_agrovitrum',
                    'u0129954_default',
                    'jU_29r5e',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );

            return self::$_db;
        }

        public static function getSearch() {
            if(self::$_search == null)
                self::$_search = mysqli_connect('localhost','root','root','agrovitrum');

            return self::$_search;
        }

        private function __construct() {}
        private function __clone() {}
        private function __wakeup() {}
    }
