<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> gestion des projets</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
						<?php
	if(!empty($_POST['id']))
{
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
$req=$bdd->prepare('SELECT * FROM user WHERE
id_user=?  ');
$req->execute(array($_POST['id']));
while ($donnees=$req->fetch())
{
	?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <image src="logo.png" width="100" height="60" id="logo"/>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
         
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nom']; echo ' ';echo $_SESSION['prenom'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                        <li>
                            <a href="Settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../LoginPage/index.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav side-nav">
                    <li class="active">
                       <!-- <li class="active">
                        <a href="authen.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> project statistics</a>
                    </li>-->
                     
					 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>projects management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                             <li>
                                <a href="forms.php">add a project</a>
                            </li>
                            <li>
                                <a href="authen.php">consult a project</a>
                            </li>

							
                        </ul>
                    </li> 
						  
					<?php	if($_SESSION['role']=="admin")
						  {
                              ?>	
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dem"><i class="fa fa-fw fa-arrows-v"></i>members <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dem" class="collapse">
                             <li>
                                <a href="membre.php">add a member</a>
                            </li>
                            <li>
                                <a href="membercons.php">consult members</a>
                            </li>
							
                        </ul>
                    </li> 
					<?php }?>
					<li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          
						   
                        </h1>
						
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        
                        <!--<form role="form">

                        
                        
                        <form action ="projetc.php" method="post">-->
						<form name="f1" method="post" action=''>
                           
							<div class="form-group">
							<fieldset>
							
								<legend>MEMBER DETAILS</legend>
								<input class="form-control" type="hidden" name="id_user" value="<?php echo $donnees['id_user'];?>">
                                <label>FIRST NAME :</label>
                                <input class="form-control" name="FIRST_NAME"  value=" <?php echo $donnees['nom'];?>">
								 <label>LAST NAME : </label>
                                <input class="form-control" name="LAST_NAME"value="<?php echo $donnees['prenom'];?>">
								 <label>MAIL :</label>
                                <input class="form-control" name="MAIL" value="<?php echo $donnees['mail'];?>">
								<label>LOGIN :  </label>
                                <input class="form-control" name="LOGIN" value="<?php echo $donnees['login'];?>">
								<label>PASSWORD :</label>
                                <input type="form-control" name="PASSWORD" class="form-control" value="<?php echo $donnees['m2p'];?>">
								<label>ROLE :</label>
                                <input type="form-control" name="ROLE" class="form-control" value="<?php echo $donnees['role'];?>">
								</fieldset>
                            </div>

                          

                            <!--<input type="submit" value="valider_t" onclick="f1.action='target.php'">-->
                            <button type="submit" onclick="f1.action='memberres.php'"  class="btn btn-primary btn-lg">edit</button>
							<button type="submit" onclick="f1.action='memberdel.php'" class="btn btn-primary btn-lg">delete</button>
							<!--<button type="submit" onclick="f1.action='projetadd.php'"  class="btn btn-default">add Button</button>-->

                        </form>
						

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="ProjectManagmentDashboard.js"></script>
									<?php 
						
                         }
						 $req->closeCursor();
}
						 
						 ?>
	

</body>

</html>