<?php
require_once('Model/StudentManager.php');

ob_start();
?>

<form>
    <?php
        foreach ($categories as $category)
        {        
            echo '<h2>' . $category . '<h2></br>';
            foreach ($students as $student)
            { 
    ?>
                <input type="radio" name="'apprenant_radieux" value=""/>
    <?php
                    echo  $student . '</br>';
            }
        }
    ?>
</form>

<?php
$content = ob_get_clean();
require('View/BaseView.php');

?>