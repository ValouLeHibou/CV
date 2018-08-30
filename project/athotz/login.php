<?php 
   require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
?>
<main>
    <section id="section_log">
        <?php require_once('notif_admin.php'); ?>

    <form id="login_post" method="post" action="verif.php">
        <h1>Identification Administrateur</h1>
               
            <input name="login" type="text" placeholder="pseudo" id="input1_login">


            <input name="password" type="password" placeholder="Mot de passe" id="input2_login">


            <input type="submit" value="Se connecter" id="bouton_log">

        </form>

            </form>

    </section>            
 </main>
<?php 
    include('layout/footer.inc.php'); 
?>
