<?php
//require('Controller/LoginController.php');
require('Controller/VoterController');

 $page =  $_GET['page'];

if(isset($_GET['page']))

switch ($page) {
    case 'login': 
         
        break;

    case 'vote' :
        var_dump( getStudent($students));
       break;

    case 'admin' :
        break;
    default:        
        break;
}