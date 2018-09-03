<?php echo $_POST['id_user']; 

session_start();
if(!empty($_POST))
{
$_SESSION['id_user']=$_POST['id_user'];
$_SESSION['FIRST_NAME']=$_POST['FIRST_NAME'];
$_SESSION['LAST_NAME']=$_POST['LAST_NAME'];
$_SESSION['MAIL']=$_POST['MAIL'];
$_SESSION['LOGIN']=$_POST['LOGIN'];
$_SESSION['PASSWORD']=$_POST['PASSWORD'];
$_SESSION['ROLE']=$_POST['ROLE'];

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
$req=$bdd->prepare('UPDATE  user SET mail=:mail ,nom=:nom,prenom=:prenom,login=:login,m2p=:m2p,role=:role
WHERE id_user=:id_user');

$req->execute(array(
    
   'mail'=>$_SESSION['MAIL'],
   'nom'=>$_SESSION['FIRST_NAME'],
   'prenom'=>$_SESSION['LAST_NAME'],
   'login'=>$_SESSION['LOGIN'],
   'm2p'=>$_SESSION['PASSWORD'],
   'role'=>$_SESSION['ROLE'],
   'id_user'=>$_SESSION['id_user']
   ));
   echo 'modification termineé!';
  header('Location:authen.php');
  ?>