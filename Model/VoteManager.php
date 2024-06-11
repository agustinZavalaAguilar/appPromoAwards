<?php
require_once("Manager.php");

Class VoteManager extends Manager{
    public function getCategories(){
        $db = $this->connection();
        $request = $db->query("SELECT *  FROM `categorie` WHERE id_role = '1'");
        return $request->fetchAll();
    }
}