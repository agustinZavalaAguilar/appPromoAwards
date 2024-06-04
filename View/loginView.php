<?php

ob_start();
?>

    <h1>Hello Sexy! Base View</h1>

<?php
$content = ob_get_clean();
require('BaseView.php');
?>
