<?php 
require_once('layout/init.inc.php');
require_once('layout/header.inc.php');
require_once('protection.php');
require_once('layout/aside_back.inc.php');
    
    
    if (isset($_POST["titre"])) { 
            if(
                !empty($_POST['titre'])
                &&!empty($_POST['categorie'])
                &&!empty($_POST['contenu'])
                &&!empty($_POST['auteur'])
        ){
                try {
                    $req = $pdo->prepare('INSERT INTO posts(post_title, post_content, post_category, post_author)
                        VALUES (:titre, :contenu, :categorie, :auteur)');
                    $req -> bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
                    $req -> bindValue(':contenu', $_POST['contenu'], PDO::PARAM_STR);
                    $req -> bindValue(':categorie', $_POST['categorie'], PDO::PARAM_INT);
                    $req -> bindValue(':auteur', $_POST['auteur'], PDO::PARAM_INT);
                    $req -> execute();
                    header('location:post.php');
            } 
                catch (Exception $e) {
                //die("Erreur MySQL : " .$e->getMessage());
                header("location:post_ad.php?notif=nok");
            }
        }
    }
        
?>
<?php require_once('layout/acceuil_admin.inc.php'); ?>
<main id="main_post_ad">
    <h1>Création Articles</h1>
    <form id="form_post" method="post" action="">
        <table border="1">
            <tr>
                <th><label for="titre">Titre</label></th>
                <td><input name="titre" type="text"></td>
            </tr>
            <tr>
                <th><label for="categorie">Catégorie</label></th>
                <td>
                    <select name="categorie">
                                <?php
                                    try {
                                        $req = $pdo->query("SELECT * FROM category ORDER BY cat_descr ASC");
                                        $req->setFetchMode(PDO::FETCH_ASSOC);
                                        $key = $req->fetchAll();
                                    ?>
                                    
                                    <?php foreach ($key as $value) {// my_var_dump($value);?>
                                        <option value="<?=$value['cat_id']?>"><?=$value["cat_descr"]?></option>
                                    <?php } ?>
                                    
                                    <?php
                                        $req->closeCursor();
                                    }
                                        catch ( Exception $e ) {
                                        die("Erreur MySQL : ".$e->getMessage());
                                    }
                                    ?>
                            </select>
                </td>
            </tr>
            <tr>
                <th><label for="contenu">Contenu</label></th>
                <td><textarea name="contenu" rows="10" cols="100"></textarea></td>
            </tr>
            <tr>
                <th></th>
                <tr>
                    <th><label for="auteur">Auteur</label></th>
                    <td>
                        <select name="auteur">
                                <?php
                                    try {
                                        $req = $pdo->query("SELECT * FROM user ");
                                        $req->setFetchMode(PDO::FETCH_ASSOC);
                                        $key = $req->fetchAll();
                                    ?>
                                    
                                    <?php foreach ($key as $value) {// my_var_dump($value);?>
                                        <option value="<?=$value['ID']?>"><?=$value["user_name"]?></option>
                                    <?php } ?>
                                    
                                    <?php
                                        $req->closeCursor();
                                    }
                                        catch ( Exception $e ) {
                                        die("Erreur MySQL : ".$e->getMessage());
                                    }
                                    ?>
                            </select>
                    </td>
                </tr>
                <td>
                    <input type="submit" value="enregistrer" />
                    <input type="reset" value="Effacer" />
                </td>
            </tr>
        </table>
    </form>
</main>