<?php


   $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=base_event", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


            $nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$email=$_GET['email'];
$date=$_GET['date'];
$nb=$_GET['nb'];
$ok=$_GET['ok'];



echo "<html><head></head><body><font size='50' align='center' color='red'> Bienvenue $nom $prenom </font></body></html>  . »"; 
?>



