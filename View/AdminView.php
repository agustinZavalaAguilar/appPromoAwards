<?php
ob_start();
?>


<main>    
<h1>Administration des votes</h1>
<section>
    <h2>Validation de votants</h2>   
    <table>
        <thead>
            <tr>
                <th scope="col">Votant</th>
                <th scope="col">Statut</th>
                <th scope="col">Valider</th>
            </tr>   
        </thead>
        <tbody> 
            <?php foreach ($voters as $voter): ?>
                <tr> 
                    <td><?= ($voter['email']) ?></td>
                    <td><?= ($voter['statut']) ?></td>
                    <td>            
                        <?php if ($voter['statut'] == 1):?>
                            <a href="index.php?page=validation&email=<?= ($voter['email']) ?>&statut=0">invalider</a>
                        <?php else: ?>
                            <a href="index.php?page=validation&email=<?= ($voter['email']) ?>&statut=1">valider</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
</section>
<section>
    <h2>Décompte de votes : Les Apprenants</h2>
    <?php foreach ($studentCategories as $category): ?>
        <article class="category">
            <header class="category_title">
                <h2><?= ($category['nom_categorie'])?></h2>
            </header>
        </article>
    <?php endforeach; ?>
</section>
<section>
    <h2>Décompte de votes : Les Formateurs</h2>
    <?php foreach ($instructorCategories as $category): ?>
        <article class="category">
            <header class="category_title">
                <h2><?= ($category['nom_categorie'])?></h2>
            </header>
        </article>
    <?php endforeach; ?>
</section>
</main>

<?php
$content = ob_get_clean();

require('View/BaseView.php');