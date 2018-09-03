<?php

session_start();
if(!empty($_POST))
{
$_SESSION['project_name']=$_POST['project_name'];
$_SESSION['project_manager']=$_POST['project_manager'];
//$_SESSION['manager']=$_POST['manager'];
$_SESSION['project_code']=$_POST['project_code'];
$_SESSION['report_date']=$_POST['report_date'];
$_SESSION['project_description']=$_POST['project_description'];
$_SESSION['CostList']=$_POST['CostList'];
$_SESSION['SchedualList']=$_POST['SchedualList'];
$_SESSION['QualityList']=$_POST['QualityList'];
$_SESSION['PassedMilestoneDate']=$_POST['PassedMilestoneDate'];
$_SESSION['PlannedMilestoneDate']=$_POST['PlannedMilestoneDate'];
$_SESSION['PlannedMileston']=$_POST['PlannedMileston'];
$_SESSION['PassedMilestone']=$_POST['PassedMilestone'];
$_SESSION['kap_description']=$_POST['kap_description'];
$_SESSION['DELIVRABLE_NAME1']=$_POST['DELIVRABLE_NAME1'];
$_SESSION['DELIVRABLE_NAME2']=$_POST['DELIVRABLE_NAME2'];
$_SESSION['ns_description']=$_POST['ns_description'];
$_SESSION['prf_description']=$_POST['prf_description'];
$_SESSION['oc_description']=$_POST['oc_description'];
$_SESSION['optionsRadios']=$_POST['optionsRadios'];
$_SESSION['direction']=$_POST['direction'];
}
echo $_SESSION['project_name'];
try
{
$bdd= new PDO('mysql:host=localhost;dbname=gestion_projets','root','',
array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}	
$req=$bdd->prepare('INSERT INTO projects(name,manager,code,report_date,project_description,SchedualList,CostList,
QualityList,PassedMilestoneDate,PlannedMilestoneDate,PlannedMileston,PassedMilestone,kap_description,
DELIVRABLE_NAME1,
DELIVRABLE_NAME2,ns_description,prf_description,oc_description,optionsRadios,direction)
VALUES(:name,:manager,:code,:report_date,:project_description,:SchedualList,:CostList,:QualityList,
:PassedMilestoneDate,:PlannedMilestoneDate,:PlannedMileston,:PassedMilestone,:kap_description,:DELIVRABLE_NAME1,
:DELIVRABLE_NAME2,:ns_description,:prf_description,:oc_description,:optionsRadios,:direction)');
$req->execute(array(
   'name'=>$_SESSION['project_name'],
   'manager'=>$_SESSION['project_manager'],
   'code'=>$_SESSION['project_code'],
   'report_date'=>$_SESSION['report_date'],
   'project_description'=>$_SESSION['project_description'],
   'SchedualList'=>$_SESSION['SchedualList'],
   'CostList'=>$_SESSION['CostList'],
   'QualityList'=>$_SESSION['QualityList'],
   'PassedMilestoneDate'=>$_SESSION['PassedMilestoneDate'],
   'PlannedMilestoneDate'=>$_SESSION['PlannedMilestoneDate'],
   'PlannedMileston'=>$_SESSION['PlannedMileston'],
   'PassedMilestone'=>$_SESSION['PassedMilestone'],
   'kap_description'=>$_SESSION['kap_description'],
   'DELIVRABLE_NAME1'=>$_SESSION['DELIVRABLE_NAME1'],
   'DELIVRABLE_NAME2'=>$_SESSION['DELIVRABLE_NAME2'],
   'ns_description'=>$_SESSION['ns_description'],
   'prf_description'=>$_SESSION['prf_description'],
   'oc_description'=>$_SESSION['oc_description'],
   'optionsRadios'=>$_SESSION['optionsRadios'],
   'direction'=>$_SESSION['direction'],
   ));
   echo 'ajout termineé!';
  header('Location:projetcons.php');

?>