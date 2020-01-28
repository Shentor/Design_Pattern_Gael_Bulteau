<?php

namespace App\Models;

class Singleton {

        private static $instance;
        private $compteur = 0;

        private function __construct(){
        }

        public static function getInstance(){

            if(self::$instance == null){
                self::$instance = new Singleton();
            }
            return self::$instance;
        }

        public function increment(){
            $this->compteur ++;
        }

        public function value(){
            return $this->compteur;
        }

}