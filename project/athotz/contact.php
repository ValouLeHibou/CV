<?php
	require_once('layout/header.inc.php');
?>
<main id="cours">
  <section id="header_cours">
    <div id="h1_uppercase"><h1>Contact</h1></div>
    <hr>
  </section>
  <section id="text-contact">
    <h2>Une question ?</h2>
    <p>
      Remplissez le formulaire et posez nous toutes vos questions, aussi saugrenues que vous voulez
    </p>
    <p>
      Vous pouvez aussi nous envoyez un mail directement pour les candidatures, des demandes autres etc.
    </p>
  </section>
  <div id="div-contact">
    <h2>athotz.team@web.com</h2>
    <h2>Nous Contacter</h2>
    <form method="post" action="#" id="form-contact">
      <div>
        <input type="text" name="name" placeholder="Nom" class="main_contact">
      </div>
      <div>
        <input type="email" name="mail" placeholder="Adresse mail" class="main_contact">
      </div>
      <div>
        <textarea name="message" placeholder="Votre Message ..." class="main_contact"></textarea>
      </div>
      <div id="check">
        <div>
          <input type="submit" value="Envoyez" id="push_form">
        </div>
      </div>
    </form>
  </div>
</main>

  <?php
  	require_once('layout/footer.inc.php');
  ?>
