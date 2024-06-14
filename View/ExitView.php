<?php
ob_start();
?>
<h1>Votre vote a bien été pris en compte</h1>


<?php 
$content = ob_get_clean();

require('View/BaseView.php');