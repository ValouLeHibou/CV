<?php
	require_once('layout/init.inc.php');
    require_once('layout/header.inc.php');
	
    if (isset($_POST["login"]))
    {
        try {
        	
            $query = "SELECT * FROM user2
                    WHERE user2_nom='" . $_POST['login'] . "'
                    AND user2_password='" . $_POST['password']. "'";
            //echo $query;

            $req = $pdo -> query($query);
            $req -> setFetchMode(PDO::FETCH_ASSOC); 
            $data = $req -> fetchAll();

            //my_var_dump($data); exit;
            if(count($data) == 0){
                header("location:login2.php?notif_user=nonOk");
            } else {
                session_start();
                $_SESSION['user2'] = $data[0]; // creation d'une case par nous
                header("location:account.php");
            }
            
        }
        catch (Exception $e) {
            //die("Erreur MySQL : " .$e->getMessage());
            header("location:login.php?");
        }
    }

                     

