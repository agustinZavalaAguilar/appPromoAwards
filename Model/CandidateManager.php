<?php
require_once("Manager.php");

// $students= ['agustin', 'annaelle', 'barnabe', 'christophe', 'cyril', 'kilian', 'martin', 'noe', 'stephane', 'vincent'];

// $formateurs = ['Cedric', 'Christophe','Laetitia', 'Luc','Tony'];

// $categories = ['Le radieux',"L'ami de tous", "Le fêtard","Le titan du Travail", "Le Designeur","Le Codeur émérite", "La Fusée d'Animation", "Le râleur ou grincheux"];


Class CandidateManager extends Manager{
    public function getStudents(){
        $db = $this->connection();
        $request = $db->query("SELECT * FROM `candidat` WHERE id_role = '1'");
        return $request->fetchAll();
    }

    public function getInstructors(){
        $db = $this->connection();
        $request = $db->query("SELECT * FROM `candidat` WHERE id_role = '2'");
        return $request->fetchAll();
    }
    
}