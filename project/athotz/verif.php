<?php
	require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
	
    if (isset($_POST["login"]))
    {
        try {
        	
            $query = "SELECT * FROM user
                    WHERE user_login='" . $_POST['login'] . "'
                    AND user_password='" . $_POST['password']. "'";
            //echo $query;

            $req = $pdo -> query($query);
            $req -> setFetchMode(PDO::FETCH_ASSOC); 
            $data = $req -> fetchAll();

            //my_var_dump($data); exit;
            if(count($data) == 0){
                header("location:login.php?notif_admin=nonOk");
            } else {
                session_start();
                $_SESSION['user'] = $data[0]; // creation d'une case par nous
                header("location:post.php");
            }
            
        }
        catch (Exception $e) {
            //die("Erreur MySQL : " .$e->getMessage());
            header("location:login.php?");
        }
    }

                     

