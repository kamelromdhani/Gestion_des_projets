<?php
session_start();
 echo $_POST['direction'];
if(!empty($_POST))
{
$_SESSION['direction']=$_POST['direction'];

}

try
{
$bdd= new PDO('mysql:host=localhost;dbname=gestion_projets','root','',
array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}	
$req=$bdd->prepare('INSERT INTO direction (nom_direc)
VALUES (:direction)');
$req->execute(array(
   'direction'=>$_SESSION['direction'],
   ));
   echo 'ajout termineé!';
header('Location:Settings.php');
?>