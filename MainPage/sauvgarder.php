<?php
session_start();
if(!empty($_POST))
{
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=$_POST['pass'];
}
try
{
$bdd= new PDO('mysql:host=localhost;dbname=test','root','');
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}	
$req=$bdd->prepare('INSERT INTO table_test(login,m2p)
VALUES(:login, :m2p)');
$req->execute(array(
   'login'=>$_SESSION['login'],
   'm2p'=>$_SESSION['pass'],
   ));
   echo 'ajout termineé!';
   header('Location:test1.php');


/*echo '<strong>bienvenue dans projetc.php!</strong>';
echo '<br>';
echo  $_POST['project_name'];echo '<br>';
echo  $_POST['project_manager'];echo '<br>';
//echo  $_POST['manager'];echo '<br>';
echo  $_POST['project_code'];echo '<br>';
echo  $_POST['report_date'];echo '<br>';
/*
echo  $_POST['project_description'];echo '<br>';
echo  $_POST['CostList'];echo '<br>';
echo  $_POST['QualityList'];echo '<br>';
echo  $_POST['PassedMilestoneDate'];echo '<br>';
echo  $_POST['PlannedMilestoneDate'];echo '<br>';
echo  $_POST['PlannedMileston'];echo '<br>';
echo  $_POST['PassedMilestone'];echo '<br>';
echo  $_POST['kap_description'];echo '<br>';
echo  $_POST['DELIVRABLE_NAME1'];echo '<br>';
echo  $_POST['DELIVRABLE_NAME2'];echo '<br>';
echo  $_POST['ns_description'];echo '<br>';
echo  $_POST['prf_description'];echo '<br>';
echo  $_POST['oc_description'];echo '<br>';
echo  $_POST['optionsRadios'];echo '<br>';
*/
//echo strftime($_POST['report_date']);
?>