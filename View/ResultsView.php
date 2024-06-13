<?php
ob_start();
?>

<section class="container">
    <div class="row">
        <h1>Les résultats pour les apprennants : </h1>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Le radieux</h2>
        </div>
        <div class="col-12">

        </div>
    </div>
</section>

<?php
$content = ob_get_clean();

require('View/BaseView.php');