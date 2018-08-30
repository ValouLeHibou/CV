 <?php 
session_start();
 require_once('layout/init.inc.php');
 if (isset($_GET["id_cours"])) { 
            
                try {
                    $req = $pdo->prepare('INSERT INTO cours_book(id_user2, id_cours, book_date, book_note)
                        VALUES (:id_user2, :id_cours, :book_date, :book_note)');
                    $req -> bindValue(':id_user2', $_SESSION['user2']['user2_ID'], PDO::PARAM_INT);
                    $req -> bindValue(':id_cours', $_GET['id_cours'], PDO::PARAM_STR);
                    $req -> bindValue(':book_date', date('Y-m-d H:i:s'), PDO::PARAM_STR);
                    $req -> bindValue(':book_note', null, PDO::PARAM_INT);
                    $req -> execute();
                    header('location:account.php');
            }
                catch (Exception $e) {
                //die("Erreur MySQL : " .$e->getMessage());
                header("location:account.php");
            }
        }
    
        
?>