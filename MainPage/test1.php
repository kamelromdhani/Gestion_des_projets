<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
 </head>
 <body>
 <!--<form action ="target.php" method="post">-->
 <form name="f1" method="post" action=''> 
 
 <p>
 <!--form a 2+ action-->
      <input type="text" name="login" placeholder="Username"/>
      <input type="password" name="pass" placeholder="Password"/>
	  <input type="text" name="cle" placeholder="cle"/>
	  <input type="submit" value="sauvgarder" onclick="f1.action='sauvgarder.php'">
	  <input type="submit" value="afficher" onclick="f1.action='afficher.php'">
	  <input type="submit" value="afficherProjet" onclick="f1.action='projetaff.php'">
	 <?php echo $_POST['id'];?>
</p>

 </form>
 </body>