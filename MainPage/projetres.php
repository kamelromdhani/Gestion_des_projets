<?php echo $_POST['id_projet']; 

session_start();
if(!empty($_POST))
{
$_SESSION['id_projet']=$_POST['id_projet'];
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
try
{
$bdd= new PDO('mysql:host=localhost;dbname=gestion_projets','root','',
array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}
catch( Exeption $e)
{
	die ('error : '.$e->getMessage());
}	
$req=$bdd->prepare('UPDATE  projects SET name=:name ,manager=:manager,code=:code,report_date=:report_date,project_description=:project_description,
SchedualList=:SchedualList,CostList=:CostList,QualityList=:QualityList,PassedMilestoneDate=:PassedMilestoneDate,PlannedMilestoneDate=:PlannedMilestoneDate,
PlannedMileston=:PlannedMileston,PassedMilestone=:PassedMilestone,kap_description=:kap_description,
DELIVRABLE_NAME1=:DELIVRABLE_NAME1,
DELIVRABLE_NAME2=:DELIVRABLE_NAME2,ns_description=:ns_description,prf_description=:prf_description,oc_description=:oc_description,
optionsRadios=:optionsRadios,direction=:direction
WHERE id_projet=:id_projet');

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
   'id_projet'=>$_SESSION['id_projet']
   ));
   echo 'modification termineé!';
  header('Location:projetcons.php');
  ?>