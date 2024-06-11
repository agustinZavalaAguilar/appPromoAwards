<?php
    class Manager{
        protected function connection(){
            try {
                $db = new PDO('mysql:host=localhost;dbname=awards;charset=utf8','root','');
                return $db;
            }
            catch(Exception $e) {
                throw new Exception('Erreur lors de la connection');
            }
        }
    }