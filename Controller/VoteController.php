<?php
require_once('Model/CandidateManager.php');
require_once('Model/VoteManager.php');
class VoteController{

    public function displayChoices(){
        
        $studentRequest = new CandidateManager();
        $students = $studentRequest->getStudents();

        $instructorRequest = new CandidateManager();
        $instructors = $instructorRequest->getInstructors();

        $categoryRequest = new VoteManager();
        $studentCategories = $categoryRequest->getStudentCategories();
        $instructorCategories = $categoryRequest->getInstructorCategories();

        require('View/VoteView.php');
    }

    public function insertVote($vote){
        $emailCheck = new VoteManager();
        $existantEmail = $emailCheck->checkExistantEmail($vote['email']);
        var_dump($existantEmail);
        if($existantEmail){
            echo 'Erreur : vous avez déjà voté';
        }else{
            $addVoteManager = new  VoteManager();
            $addVoteManager->addVote($vote);
        }
    }

    public function displayResults(){
        require('view/ResultsView.php');
    }

    public function displayAdminPage(){
        $voteManager = new VoteManager();
        $voters = $voteManager->getVoterEmails();
        $categoryRequest = new VoteManager();
        $studentCategories = $categoryRequest->getStudentCategories();
        $instructorCategories = $categoryRequest->getInstructorCategories();

        require('view/AdminView.php');
    }
    public function validation($email,$statut){
        $voteManager = new VoteManager();
        $voteManager -> updateVoteStatus($email,$statut);
        
        header('Location:index.php?page=admin');
    }

}



    
