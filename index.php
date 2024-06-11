<?php
//require('Controller/LoginController.php');
require('Controller/VoteController.php');

 $page =  $_GET['page'];

if(isset($_GET['page']))

switch ($page) {
    case 'login': 
         
        break;

    case 'vote' :
        $voteController = new VoteController();
        $voteController->displayChoices();
       break;

    case 'admin' :
        break;
    default:        
        break;
}