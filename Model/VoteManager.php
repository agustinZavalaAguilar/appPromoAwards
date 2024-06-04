<?php

$students= [
    [
        'nom' => 'Tom',
    ], 
    [
        'nom' => 'Ann',
    ],
    [
        'nom' => 'Laure',
    ],
]; 

function getStudent($students){
    foreach($students as $student){
        echo 'Nom : ' .$student.'nom'. '<br>';
    } 
}