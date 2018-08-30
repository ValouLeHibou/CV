  <?php
        if(isset($_SESSION['user'])) {
    ?>
    <div>
        Bienvenue,  <?=$_SESSION['user']['user_name']; ?><br>
        <a href="logout.php">Logout</a>
    </div>
<?php } ?>
