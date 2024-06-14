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

    public function checkExistantEmail($email){
        $db = $this->connection();
        if(isset($email)){
        
            $request = $db->prepare("SELECT email FROM vote WHERE email = :email");
            $parameter = array(':email' => $email);
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

    public function getVoterEmails(){
        $db = $this->connection();
        $request = "SELECT DISTINCT email, statut FROM `vote`";
        $emails = $db->query($request);
        return $emails->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateVoteStatus($email, $statut) {       
        $db = $this->connection();    
  
        $request = "UPDATE vote SET statut = :statut WHERE email = :email";
        $statement = $db->prepare($request);
     
        $parameters = [
            ':statut' => $statut,
            ':email' => $email
        ];
    
        try {
            $statement->execute($parameters);
            
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            return false;
        }
    }

    public function getVoteResults() {
//         SELECT categorie.nom_categorie, candidat.prenom, COUNT(*) as vote_count
// FROM vote 
// INNER JOIN categorie ON vote.id_categorie = categorie.id_categorie
// INNER JOIN candidat ON candidat.id_candidat = vote.id_candidat
// GROUP BY categorie.nom_categorie, candidat.prenom  
// ORDER BY categorie.id_categorie ASC, vote_count DESC
;
    }
}    
