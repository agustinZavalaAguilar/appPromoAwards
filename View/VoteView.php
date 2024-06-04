<?php


ob_start();
?>
<head>
<link rel="stylesheet" href="./public/Style.css">
</head>

<h1>C'est parti!</h1>

<form>
    <h2>L'apprénant radieux</h2>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <h2>L'apprénant ami de tous</h2>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <h2>L'apprénant grincheux</h2>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
    <input type="radio" name="'apprenant_radieux" value=""/>
</form>

<?php
$content = ob_get_clean();
require('View/BaseView.php');

?>