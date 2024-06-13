<?php
//require('Controller/LoginController.php');
require('Controller/VoteController.php');

 $page =  $_GET['page'];

if(isset($_GET['page']))

switch ($page) {

    case 'vote' :
        $voteController = new VoteController();
        if(isset($_POST)){
            $voteController->insertVote($_POST);
        }
        $voteController->displayChoices();
       break;

    case 'results' :
        $voteController = new VoteController();
        $voteController->displayResults();
        break;

    default:        
        break;
}