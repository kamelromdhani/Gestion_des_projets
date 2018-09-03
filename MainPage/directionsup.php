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
$req=$bdd->prepare('DELETE FROM direction WHERE nom_direc=:direction');
$req->execute(array( 'direction'=>$_SESSION['direction']));
echo 'suppression terminée!';
header('Location:Settings.php');
?>