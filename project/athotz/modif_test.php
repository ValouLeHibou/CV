<?php 
require_once('layout/init.inc.php');
require_once('layout/header.inc.php');
require_once('protection.php');
require_once('layout/aside_back.inc.php');
    
    
    if (isset($_POST["titre"]) && isset($_GET["id_modif"])) { 
    try{
         $query = "UPDATE posts     
            SET post_content ='" . addslashes($_POST["contenu"]) . "',
            post_title ='" . addslashes($_POST["titre"]) . "',
            post_category ='"  . addslashes($_POST["categorie"]) . "',
            post_author ='" . addslashes($_POST["auteur"]) . "'
            WHERE post_id =" . $_GET["id_modif"];
         
         $req = $pdo->exec($query);
         header("Location:post.php?");
                  echo $query;

     }
     catch ( Exception $e) {
        die("erreur MySQL : ".$e->getMessage());
    }
}
        
?>
<?php require_once('layout/acceuil_admin.inc.php'); ?>
<main id="main_post_ad">
    <h1>Modification Articles</h1>
    <?php
     try {
            $req=$pdo->query("SELECT * FROM posts, user, category
                                           WHERE post_author=ID
                                       AND post_category=cat_id
                                       AND post_id=". $_GET['id_modif']);
            $req->setFetchMode(PDO ::FETCH_ASSOC);


            $value = $req->fetch();
             ?>
    <form id="form_post" method="post" action="">
        <table border="1">
            <tr>
                <th><label for="titre">Titre</label></th>
                <td><input name="titre" type="text" value="<?=$value["post_title"]?>"></td>
            </tr>
            <tr>
                <th><label for="contenu">Contenu</label></th>
                <td><textarea name="contenu" rows="10" cols="100"><?=$value["post_content"]?></textarea></td>
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
    <?php
            $req->closeCursor();
        }
        catch(exception $e) {
            die("erreur MySQL : ".$e->getMessage());
        }
        ?>
</main>