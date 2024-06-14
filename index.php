<?php
//require('Controller/LoginController.php');
require('Controller/VoteController.php');
require('Controller/UserController.php');

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

    case 'hasVoted' :
        $userController = new UserController();
        $userController->displayExitPage(); 
        break;

    case 'results' :
        $voteController = new VoteController();
        $voteController->displayResults();
        break;

    case 'admin' :
        $voteController = new VoteController();
        $voteController->displayAdminPage();
    break;

    case 'validation' :
        $voteController = new VoteController();
        $email = $_GET['email'];
        $statut = $_GET['statut'];
        $voteController -> validation($email,$statut);
    break;

    default:        
        break;
}