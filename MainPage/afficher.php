<!DOCTYPE html>
<html>
<?php 

try
{
$bdd= new PDO('mysql:host=localhost;dbname=test','root','');
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}
//chercher/afficher +champ différants
$req=$bdd->prepare('SELECT login,m2p FROM table_test WHERE
login =? OR m2p =? ');
$req->execute(array($_POST['login'],$_POST['login']));
while ($donnees=$req->fetch())
{
	//echo $donnees['login'];
	//echo $donnees['m2p'];
	?>
	<INPUT type='text' SIZE='30' NAME='login' VALUE="<?php /* afficher variable dans input*/ echo $donnees['login'];?>"/>
	<INPUT type='text' SIZE='30' NAME='pass' VALUE="<?php /* afficher variable dans input*/ echo $donnees['m2p'];?>"/>
	<br></br>
<?php	

}
$req->closeCursor();

//echo  $_POST['project_name'];
//echo '<strong>verifier vos parametres!</strong>';
?>


</html>