<?php ob_start(); ?>

<section class="admin-panel">
    <header class="form-header">
        <h1>Panneau d'Administration</h1>
    </header>

    <article class="admin-actions">
        <a href="index.php?action=addFilm" class="add-button">Ajouter un Film</a>
        <a href="index.php?action=addGenre" class="add-button">Ajouter un Genre</a>
    </article>
</section>

<?php
$titre = "Panneau Admin";
$metaDescription = "Panneau d'administration - On Air.";
$contenu = ob_get_clean();
require "view/template.php";
?>