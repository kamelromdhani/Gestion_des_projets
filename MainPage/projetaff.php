<!DOCTYPE html>
<html>
<?php 

try
{
$bdd= new PDO('mysql:host=localhost;dbname=gestion_projets','root','',
array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}
//chercher/afficher +champ différants
$req=$bdd->prepare('SELECT name,manager,code,report_date,SchedualList,CostList,
QualityList FROM projects WHERE
name =? OR manager =? OR code =? OR report_date =? OR SchedualList =? OR CostList =? OR QualityList =?  ');
$req->execute(array($_POST['cle'],$_POST['cle'],$_POST['cle'],$_POST['cle'],$_POST['cle'],$_POST['cle'],$_POST['cle']));
while ($donnees=$req->fetch())
{
	//echo $donnees['login'];
	//echo $donnees['m2p'];
	?>
	<INPUT type='text' SIZE='30' NAME='name' VALUE="<?php /* afficher variable dans input*/ echo $donnees['name'];?>"/>
	<INPUT type='text' SIZE='30' NAME='manager' VALUE="<?php /* afficher variable dans input*/ echo $donnees['manager'];?>"/>
	<INPUT type='text' SIZE='30' NAME='code' VALUE="<?php /* afficher variable dans input*/ echo $donnees['code'];?>"/>
	<INPUT type='text' SIZE='30' NAME='report_date' VALUE="<?php /* afficher variable dans input*/ echo $donnees['report_date'];?>"/>
	<INPUT type='text' SIZE='30' NAME='SchedualList' VALUE="<?php /* afficher variable dans input*/ echo $donnees['SchedualList'];?>"/>
	<INPUT type='text' SIZE='30' NAME='CostList' VALUE="<?php /* afficher variable dans input*/ echo $donnees['CostList'];?>"/>
	<INPUT type='text' SIZE='30' NAME='QualityList' VALUE="<?php /* afficher variable dans input*/ echo $donnees['QualityList'];?>"/>
	
	<br></br>
<?php	

}
$req->closeCursor();

//echo  $_POST['project_name'];
//echo '<strong>verifier vos parametres!</strong>';
?>


</html>