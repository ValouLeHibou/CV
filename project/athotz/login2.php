<?php 
   require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
?>
<main>
    <section id="section_log2">
        <?php require_once('notif_user.php'); ?>
    
        <form id="login_post" method="post" action="verif2.php">
            <h1>Identification Utilisateur</h1>

            <input name="login" type="text" placeholder="Nom" id="input1_login2">


            <input name="password" type="password" placeholder="Mot de passe" id="input2_login2">


            <input type="submit" value="Se connecter" id="bouton_log2">

        </form>
    

    </section>
</main>
<?php 
    include('layout/footer.inc.php'); 
?>