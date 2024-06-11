<?php
require_once('Model/StudentManager.php');
require_once('Model/VoteManager.php');
class VoteController{

    public function displayChoices(){
        
        $studentRequest = new StudentManager();
        $students = $studentRequest->getStudents();

        $categoryRequest = new VoteManager();
        $categories = $categoryRequest->getCategories();

        require('View/VoteView.php');
    }
}



    
