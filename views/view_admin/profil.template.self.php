<?php
$titre = "Page des profils";
ob_start();

?>

<!-- Un buffer permet de mettre le contenu d'une page dans une variable -->
<!-- <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info">Les livres de la bibliotheque</h1> -->

<table class="table text_center">
    <tr class="table-dark">
        <th>Pr_ID</th>
        <th>Nom du profil</th>
        <th>Status du profil</th>
        <th>Date de creation du profil</th>
        <th>Date de suppression du profil</th>
        <!-- colspan permet d'avoir deux colonnes dans une seule -->
        <th colspan="2">Actions</th>
    </tr>
    <!-- On va utiliser la boucle php pour afficher tous les livres du $tableauLivres -->
    <!-- On peut directement acceder à l'attribut static $$tableauLivres au moyen du nom de la classe libre -->

    <?php
    require_once "controllers/ProfilController.Class.php";
    for ($i = 0; $i < count($monProfil); $i++) :

    ?>
        <tr>
            <!-- Aligner chacun element verticalement on utilise la class align-middle -->
            <td class="align-middle"><a href="<?= $monProfil[$i]->GetPrId(); ?>"><?= $monProfil[$i]->GetPrName(); ?></a></td>
            <td class="align-middle"><?= $monProfil[$i]->GetPrStatus(); ?></td>
            <td class="align-middle"><?= $monProfil[$i]->GetPrCreationDate(); ?></td>
            <td class="align-middle"><?= $monProfil[$i]->GetPrEditDate(); ?></td>
            <td class="align-middle"><a href="<?= $monProfil[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
            <td class="align-middle">
                <!-- Dans action on decris la route complet de la base url et l'id du livre à supprimer -->
                <!-- On ajoute une confirmation js un popper au clic du bouton submits -->
                <form method="POST" action="<?= $monProfil[$i]->GetPrId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endfor; ?>

</table>
<a href="" class="btn btn-success d-block">AJouter</a>

<?php
// ON deverse le contenu dans la variable $content au moyen de ob_get_clean
$content = ob_get_clean();

require "../template.self.view.php";

?>