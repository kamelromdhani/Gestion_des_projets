
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<strong>bienvinue test2.php</strong>
<?php
echo "<br>";
echo $_SESSION['login'];
?>

<INPUT type='text' SIZE='30' NAME='pass' VALUE="<?php /* afficher variable dans input*/ echo $_SESSION['pass'];?>"/>

<a href="target.php">target.php</a>
</html>
