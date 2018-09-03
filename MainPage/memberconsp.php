<?php
session_start();
$_SESSION['cle']="";
if(!empty($_POST))
{
	$_SESSION['cle']=$_POST['cle'];
}

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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="dist/css/bootstrap-select.css">

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
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nom']; echo ' ';echo $_SESSION['prenom'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                        <li>
                            <a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                           member description
						   
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Main jumbotron for a primary marketing message or call to action -->
                <!-- <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a>
                    </p>
                </div>

                <div class="page-header">
                    <h1>Buttons</h1>
                </div>
                <p>
                    <button type="button" class="btn btn-lg btn-default">Default</button>
                    <button type="button" class="btn btn-lg btn-primary">Primary</button>
                    <button type="button" class="btn btn-lg btn-success">Success</button>
                    <button type="button" class="btn btn-lg btn-info">Info</button>
                    <button type="button" class="btn btn-lg btn-warning">Warning</button>
                    <button type="button" class="btn btn-lg btn-danger">Danger</button>
                    <button type="button" class="btn btn-lg btn-link">Link</button>
                </p>
                <p>
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-link">Link</button>
                </p>
                <p>
                    <button type="button" class="btn btn-sm btn-default">Default</button>
                    <button type="button" class="btn btn-sm btn-primary">Primary</button>
                    <button type="button" class="btn btn-sm btn-success">Success</button>
                    <button type="button" class="btn btn-sm btn-info">Info</button>
                    <button type="button" class="btn btn-sm btn-warning">Warning</button>
                    <button type="button" class="btn btn-sm btn-danger">Danger</button>
                    <button type="button" class="btn btn-sm btn-link">Link</button>
                </p>
                <p>
                    <button type="button" class="btn btn-xs btn-default">Default</button>
                    <button type="button" class="btn btn-xs btn-primary">Primary</button>
                    <button type="button" class="btn btn-xs btn-success">Success</button>
                    <button type="button" class="btn btn-xs btn-info">Info</button>
                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                    <button type="button" class="btn btn-xs btn-link">Link</button>
                </p>

                <div class="page-header">
                    <h1>Thumbnails</h1>
                </div>
                <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">

                <div class="page-header">
                    <h1>Dropdown menus</h1>
                </div>
                <div class="dropdown theme-dropdown clearfix">
                    <a id="dropdownMenu1" href="#" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a>
                        </li>
                    </ul>
                </div>

                <div class="page-header">
                    <h1>Navbars</h1>
                </div>

                <div class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Project name</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a>
                                </li>
                                <li><a href="#about">About</a>
                                </li>
                                <li><a href="#contact">Contact</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                        <li><a href="#">One more separated link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                        <!--/.nav-collapse -->
                    <!-- </div>
                </div>

                <div class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Project name</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a>
                                </li>
                                <li><a href="#about">About</a>
                                </li>
                                <li><a href="#contact">Contact</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                        <li><a href="#">One more separated link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    <!-- </div>
                </div>

                <div class="page-header">
                    <h1>Alerts</h1>
                </div>
                <div class="alert alert-success">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>

                <div class="page-header">
                    <h1>Progress bars</h1>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span>
                    </div>
                    <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span>
                    </div>
                    <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span>
                    </div>
                </div>  -->

                <!-- <div class="page-header">
                    <h1>List groups</h1>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <!-- /.col-sm-4 -->
                    <!-- <div class="col-sm-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">Cras justo odio</a>
                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item">Morbi leo risus</a>
                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                        </div>
                    </div> -->
                    <!-- /.col-sm-4 -->
                    <!-- <div class="col-sm-4">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            </a>
                        </div>
                    </div> -->
                    <!-- /.col-sm-4 -->
                <!-- </div> --> 

                <div class="page-header">
				<label>search project :</label>
				
					
					
												<!--<form class="navbar-form" role="search">-->
        <div class="input-group">
		<form name="f1" method="post" action=''> 
            <input type="text" class="form-control" VALUE="<?php /* afficher variable dans input */echo $_SESSION['cle'];?>"  name="cle"/>					
            <button class="btn btn-default"  onclick="f1.action='membercons.php'" type="submit" name="serchbu" id="searchbu"><i class="glyphicon glyphicon-search"></i></button>
        </form>  
        </div>
		<div class="container">
  <h2>Result :</h2>
  <table class="table table-hover table-striped table-bordered table-condensed">
    <thead>
      <tr>
	    <th>    </th>
        <th>first_name</th>
        <th>last_name</th>
        <th>role</th>
      </tr>
    </thead>
    <tbody>
	<?php
	if(!empty($_POST['cle']))
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
$req=$bdd->prepare('SELECT id_user,prenom,nom,role FROM user WHERE
prenom =? OR nom =? OR role =? ');
$req->execute(array($_POST['cle'],$_POST['cle'],$_POST['cle']));
while ($donnees=$req->fetch())
{
	//<a href="forms.html">consult a project</a><a href='#' onclick='document.getElementById("test").submit()'>Ton lien</a>
	//<form id="test" action="le_lien_vers_ta_page">
//<input type="hidden" name="a_recup" value="tu_mets_ta_variable_ici"/>
//</form>
//<a href='#' onclick='document.getElementById("test").submit()'>Ton lien</a>
	?>
	
      <tr>
        <td>
		<form id="test" method="post" action="memberconsaff.php">
           <input type="hidden" name="id" id="id" value="<?php echo  $donnees['id_user'];?>"/>
		   <input type="submit" class="btn btn-primary btn-lg" value="consult" >
        </form>
		</td>
		<td>
		<!--<a href='#'  onclick='document.getElementById("test").submit()' >--> <?php /* afficher variable dans input*/ echo $donnees['prenom'];?></a></td>
        <td><?php /* afficher variable dans input*/ echo $donnees['nom'];?></td>
        <td><?php /* afficher variable dans input*/ echo $donnees['role'];?></td>
		
	  <?php
	}
}
	else
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
$req=$bdd->query('SELECT id_user,nom,prenom,role FROM user ');
while ($donnees=$req->fetch())
{
	//<a href="forms.html">consult a project</a><a href='#' onclick='document.getElementById("test").submit()'>Ton lien</a>
	//<form id="test" action="le_lien_vers_ta_page">
//<input type="hidden" name="a_recup" value="tu_mets_ta_variable_ici"/>
//</form>
//<a href='#' onclick='document.getElementById("test").submit()'>Ton lien</a>
	?>
	
      <tr>
        <td>
		<form id="test" method="post" action="memberconsaff.php">
           <input type="hidden" name="id" id="id" value="<?php echo  $donnees['id_user'];?>"/>
		   <input type="submit" class="btn btn-primary btn-lg" value="consult" >
        </form>
		</td>
		<td>
		<!--<a href='#'  onclick='document.getElementById("test").submit()' >--> <?php /* afficher variable dans input*/ echo $donnees['prenom'];?></a></td>
        <td><?php /* afficher variable dans input*/ echo $donnees['nom'];?></td>
        <td><?php /* afficher variable dans input*/ echo $donnees['role'];?></td>
		
	  <?php
	}
	}
	$req->closeCursor();
	?>
      
       
      
    </tbody>
  </table>
</div>

		
												
       

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
	<script>
	document.getElementById('logo').onclick=function(){var gotosofrecom= window.open("http://www.sofrecom.com/");}
	document.getElementById('searchbu').onclick=function(){document.getElementById('formulaire').style.background-color='bleu';}
</script>
</body>

</html>