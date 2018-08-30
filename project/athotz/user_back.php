<?php 
    require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
    require_once('protection.php');
    require_once('layout/aside_back.inc.php');
?>
<?php require_once('layout/acceuil_admin.inc.php'); ?>
<main id="main_user">

    <h1>Gestion utilisateurs</h1>
    <table id="table_post">
        <caption>Liste des utilisateurs</caption>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>email</th>
            <th>Date de naissance</th>
        </tr>
        <?php 
        try {
            $req=$pdo->query("SELECT * FROM user2 
                                       ORDER BY user2_ID ASC ");
            $req->setFetchMode(PDO ::FETCH_ASSOC); 
            $key = $req->fetchAll();
            foreach ($key as $value) {

            ?>
            <tr>
                <td>
                    <?= $value["user2_prenom"]; ?>
                </td>
                <td>
                    <?= $value["user2_nom"]; ?>
                </td>
                <td>
                    <?= $value["user2_mail"]; ?>
                </td>
                <td>
                    <?= $value["user2_anniv"]; ?>
                </td>
            </tr>
            <?php
            }
            ?>
    </table>
    <?php
            $req->closeCursor();
        }
        catch(exception $e) {
            die("erreur MySQL : ".$e->getMessage());
        }
    ?>

</main>