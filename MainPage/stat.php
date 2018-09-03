<?php ?>

<label>direction</label>
<select name="direction" id="direction">
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
$req=$bdd->query('SELECT * FROM direction ');
while ($donnees=$req->fetch())
{
	?>
												<option value="<?php echo $donnees['nom_direc'];?>"><?php echo $donnees['nom_direc'];?></option>
												
  <?php
	}
	$req->closeCursor();
	?>
												
</select>
	
