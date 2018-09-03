<?php echo $_POST['id_user']; 
session_start();
if(!empty($_POST))
{
$_SESSION['id_user']=$_POST['id_user'];
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
$req=$bdd->prepare('DELETE FROM user WHERE id_user=:id_user');
$req->execute(array( 'id_user'=>$_SESSION['id_user']));
echo 'suppression terminée!';
header('Location:authen.php');
?>