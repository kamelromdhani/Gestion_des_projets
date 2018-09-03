<?php echo $_POST['id_projet']; 
session_start();
if(!empty($_POST))
{
$_SESSION['id_projet']=$_POST['id_projet'];
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
$req=$bdd->prepare('DELETE FROM projects WHERE id_projet=:id_projet');
$req->execute(array( 'id_projet'=>$_SESSION['id_projet']));
echo 'suppression terminée!';
header('Location:projetcons.php');
?>