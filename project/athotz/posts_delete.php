<?php
	require_once('layout/init.inc.php');
	
    if (isset($_GET["id"]))
    { 
        try {

             $query_delet = "DELETE FROM posts
                        WHERE post_id =" . $_GET["id"];
            //echo $query;
            $req = $pdo -> exec($query_delet);
            header("location:post.php?notif=ok");
            
        }
        catch (Exception $e) {
            //die("Erreur MySQL : " .$e->getMessage());
            header("location:post.php?notif=nok");
        }
    }

                     

