<?php
require_once('Model/StudentManager.php');

ob_start();
?>
<head>
<link rel="stylesheet" href="./public/Style.css">
</head>

<form>
    <?php
        foreach ($categories as $category)
        {        
            echo '<h2>' . $category . '<h2></br>';
            foreach ($students as $student)
            { 
    ?>
                <div class="student_card">
                    <img class="student_image" src="<?= 'public/image/Apprenants/' . $student . '.png' ?>" />

                    <input type="radio" name="'apprenant_radieux" value=""/>
        <?php
                        echo  $student . '</br>';
                echo '</div>';
            }
        }
    ?>
</form>

<?php
$content = ob_get_clean();
require('View/BaseView.php');

?>