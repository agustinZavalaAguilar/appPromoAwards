

<?php
ob_start();
?>


<section class="container">
<form action="index.php?page=hasVoted" method="post" class="container text-center mt-5">
<div class="text-forma" id="lesapprenants" >
        <h2>Les Apprenants</h2>
        </div>
            <div class=" justify-content-center">

                <?php foreach ($studentCategories as $category) { ?>

                    <div class="row  d-flex flex-column">
                        <div class="col-12">
                            <h3 class="text-center"><?php echo ($category['nom_categorie']); ?></h3>
                            <h4 class="text-center"><?php echo ($category['description_categorie']); ?></h4>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-wrap justify-content-center w-100">
                                    <?php foreach ($students as $student) {
                                    $inputId = 'student_' . $student['prenom'] . '_' . $category['id_categorie'];?>
                                
                                    <div class="student_card flex-column text-center m-2">
                                        <label for="<?php echo $inputId; ?>" class="student-label">
                                            <img class="student_image mt-3" src="<?php echo 'public/image/Apprenants/' . ($student['prenom']) . '.png'; ?>" alt="Image de <?php echo ($student['prenom']); ?>" />
                                            <p class="text-center"><?php echo ($student['prenom']); ?><br /></p>
                                        </label>
                                        <input type="radio" id="<?php echo $inputId; ?>" name="votes[<?php echo ($category['id_categorie']); ?>]" value="<?php echo ($student['id_candidat']); ?>"class="btn-radio" required/>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <div id="lesformateurs" class="text-forma" >
            <h2>Les Formateurs</h2>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($instructorCategories as $category) { ?>
                <div class="row d-flex flex-column">
                <div class="col-12">
                    <h3 class="text-center"><?php echo ($category['nom_categorie']); ?></h3>
                </div>
                <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center w-100">
                    <?php foreach ($instructors as $instructor) {
                        $inputId = 'instructor_' . $instructor['prenom'] . '_' . $category['id_categorie'];
                    ?>
                        <div class="student_card flex-column text-center m-3">
                            <label for="<?php echo $inputId; ?>" class="student-label">
                                <img class="student_image mt-3" src="<?php echo 'public/image/Formateurs/' . ($instructor['prenom']) . '.png'; ?>" alt="Image de <?php echo ($instructor['prenom']); ?>" />
                                <p class="text-center"><?php echo ($instructor['prenom']); ?><br /></p>
                            </label>
                            <input type="radio" id="<?php echo $inputId; ?>" name="votes[<?php echo ($category['id_categorie']); ?>]" value="<?php echo ($instructor['id_candidat']); ?>"class="btn-radio2" required/>
                        </div>
                    <?php } ?>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>    
        <div class="form-footer mt-4">
            <input type="email" class="form-control mb-2" name="email" placeholder="email" value="" required style="max-width: 300px; margin: auto;" />
            <button type="submit" id="validation" class="btn btn-primary btn-hover">Valider</button>
        </div>
    </form>
        </section>
        <script>
        // JavaScript pour maintenir la sélection active et le bouton radio correspondant
        document.addEventListener('DOMContentLoaded', function() {
            var studentLabels = document.querySelectorAll('.student-label');
            studentLabels.forEach(function(label) {
                label.addEventListener('click', function() {
                    var alreadySelected = this.classList.contains('selected');
                    var radio = this.nextElementSibling; // Sélectionner le bouton radio suivant
                    studentLabels.forEach(function(l) {
                        l.classList.remove('selected');
                    });
                    if (!alreadySelected) {
                        this.classList.add('selected');
                        radio.checked = true; // Cocher le bouton radio
                    } else {
                        radio.checked = false; // Décocher le bouton radio
                    }
                });
            });
        });
    </script>


<?php
$content = ob_get_clean();
require('View/BaseView.php');

?>