<?php

session_start();
if(!empty($_POST))
{
$_SESSION['FIRST_NAME']=$_POST['FIRST_NAME'];
$_SESSION['LAST_NAME']=$_POST['LAST_NAME'];
$_SESSION['MAIL']=$_POST['MAIL'];
$_SESSION['LOGIN']=$_POST['LOGIN'];
$_SESSION['PASSWORD']=$_POST['PASSWORD'];
$_SESSION['ROLE']=$_POST['ROLE'];
}

echo $_POST['FIRST_NAME'];
try
{
$bdd= new PDO('mysql:host=localhost;dbname=gestion_projets','root','',
array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}	
$req=$bdd->prepare('INSERT INTO user(mail,nom,prenom,login,m2p,role)
VALUES(:mail,:nom,:prenom,:login,:m2p,:role)');
$req->execute(array(
   'mail'=>$_SESSION['MAIL'],
   'nom'=>$_SESSION['FIRST_NAME'],
   'prenom'=>$_SESSION['LAST_NAME'],
   'login'=>$_SESSION['LOGIN'],
   'm2p'=>$_SESSION['PASSWORD'],
   'role'=>$_SESSION['ROLE'],
   ));
   echo 'ajout termineé!';
    header('Location:membercons.php');
?>