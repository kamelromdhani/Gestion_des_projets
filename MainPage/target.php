<?php
session_start();
if(!empty($_POST))
{
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=$_POST['pass'];
}
 if(isset ($_SESSION['login']) AND $_SESSION['login']=="majdi" AND isset ($_SESSION['pass']) AND $_SESSION['pass']=="1234")
  {
 /*echo $_POST['login'];
  echo $_POST['pass'];*/
  ?>
   <strong>bienvinue target.php</strong>
   <a href="test2.php">test2</a>
   
   
  
  
  <?php 
  }
   else
  {
	  echo '<strong>verifier vos parametres!</strong>';
	  echo $_SESSION['login'];
	  echo $_SESSION['pass'];
	  //header('Location: ../LoginPage/index.html');
  }
  ?>
