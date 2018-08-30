<?php 
    require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
    require_once('protection.php');
    require_once('layout/aside_back.inc.php');
?>  
    <?php require_once('layout/acceuil_admin.inc.php'); ?>
        <main id="main_post">
            <h1>Gestion articles</h1>

            <a href="post_ad.php">Ajouter</a>
            <table id="table_post">
                <caption>Liste des articles</caption>
                <tr>
                    
                    <th>Date</th>
                    <th>Catégories</th>
                    <th>Auteur</th>
                    <th>Titres</th>
                    <th>Modération</th>
                    <th>Modification</th>
                </tr>
                <?php
        try {
            $req=$pdo->query("SELECT * FROM posts, user, category
                                       WHERE post_author=ID
                                       AND post_category=cat_id 
                                       ORDER BY post_date DESC ");
            $req->setFetchMode(PDO ::FETCH_ASSOC); 


            $key = $req->fetchAll();
            foreach ($key as $value) {

            ?>
                    <tr>
                        <td>
                            <?= $value["post_date"]; ?>
                        </td>
                        <td>
                            <?= $value["cat_descr"]; ?>
                        </td>
                        <td>
                            <?= $value["user_name"]; ?>
                        </td>
                        <td>
                            <?= $value["post_title"]; ?>
                        </td>
                        <td>
                            <a style="color: red" onclick="return confirm('Est tu sur de vouloir Supprimer cette article ?');" href="posts_delete.php?id=<?= $value["post_id"]; ?>">Supprimer</a>
                        </td>
                         <td>
                            <a style="color: green" href="modif_test.php?id_modif=<?= $value["post_id"]; ?>">Modifier</a>
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