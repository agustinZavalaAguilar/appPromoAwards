<?php
require_once("Manager.php");

Class VoteManager extends Manager{
    public function getStudentCategories(){
        $db = $this->connection();
        $request = $db->query("SELECT *  FROM `categorie` WHERE id_role = '1'");
        return $request->fetchAll();
    }

    public function getInstructorCategories(){
        $db = $this->connection();
        $request = $db->query("SELECT *  FROM `categorie` WHERE id_role = '2'");
        return $request->fetchAll();
    }

    public function addVote($vote) {
        $db = $this->connection();
        $existantEmail = $this->checkExistantEmail($vote);
        $request = $db->prepare("INSERT INTO vote (email, id_categorie, id_candidat, statut) 
                                 VALUES (:email, :id_categorie, :id_candidat, :statut)");
    
       
        if (isset($vote['email']) && isset($vote['votes'])) {
            $email = $vote['email'];
            $votes = $vote['votes'];
            
            foreach ($votes as $id_categorie => $id_candidat) {                
                
                $statut = '1';                 
                $parametres = array(
                    ':email' => $email,
                    ':id_categorie' => $id_categorie,
                    ':id_candidat' => $id_candidat,                    
                    ':statut' => $statut
                );
    
                try {
                    $request->execute($parametres);
                } catch (PDOException $e) {                    
                    echo 'Erreur : ' . $e->getMessage();
                }
            }
        } else {            
            echo 'Erreur : une ou plusieurs clés manquent dans le tableau $vote.';            
        }           
        
    }

    public function checkExistantEmail($vote){
        $db = $this->connection();

        if(isset($vote['$email'])){
            $email = $vote['email'];
            $request = $db->query("SELECT email FROM vote WHERE email = :email");
            $parameter = array (':email' => $email);
            try{
                $request->execute($parameter);
                if(isset($request)){
                    return true;
                } else {
                    return false;
                }
            }
            catch(PDOException $e) {
                echo 'Erreur : ' . $e->getMessage() ;
            }
        }
    }
}    