<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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
<!--                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a> -->
                    <!-- <ul class="dropdown-menu message-dropdown">
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
                    </ul> -->
             <!--   </li> -->
                <!-- <li class="dropdown">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> ramzi rezgui <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li> -->
                        <li>
                           <a href="settings.html"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> project statistics</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>                                       
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>projects management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                             <li>
                                <a href="forms.html">add a project</a>
                            </li>
                            <li>
                                <a href="bootstrap-elements.php">consult a project</a>
                            </li>
                        </ul>
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
                            Tables
							
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
               
                      
                  
                   
               
                <!-- /.row -->

                
                        <h2>project RAG status</h2>
                      
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=gestion_projets', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$req = $bdd->query('SELECT code, SchedualList,CostList, QualityList FROM projects');
?>
<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>project code</th>
                                        <th>scheduale RAG</th>
                                        <th>cost RAG</th>
                                        <th>quality RAG</th>
                                    </tr>
                                </thead>
<?php while ($donnees = $req->fetch()){ ?>
                             
                                    <tr>
									<td><?php echo $donnees['code']?></td>
									<?php 
								switch ($donnees['SchedualList'])
								{
									case 'green': $couleur='color: green;'; break;
									case 'red': $couleur='color: red;'; break;
									case 'amber': $couleur='color: orange;'; break;
									default :$couleur='color: black;';
								}
								echo '<td style="' . $couleur . '"> '.$donnees['SchedualList'].' </td>';
								
									?>	
                                       
										<?php 
								switch ($donnees['CostList'])
								{
									case 'green': $couleur='color: green;'; break;
									case 'red': $couleur='color: red;'; break;
									case 'amber': $couleur='color: orange;'; break;
									default :$couleur='color: black;';
								}
								echo '<td style="' . $couleur . '"> '.$donnees['CostList'].' </td>';
								
									?>	
                                      
										<?php 
								switch ($donnees['QualityList'])
								{
									case 'green': $couleur='color: green;'; break;
									case 'red': $couleur='color: red;'; break;
									case 'amber': $couleur='color: orange;'; break;
									default :$couleur='color: black;';
								}
								echo '<td style="' . $couleur . '"> '.$donnees['QualityList'].' </td>';
								
									?>	
									</tr> 
									
								
								
<?php } ?>
 </table>
 
 <form method="post" action="table.php">
                  <label>filtre passed milestone :</label><br/>
				  <label>first milestone </label>
											<select name="FirstMilestone" id="FirstMilestone">
												<option value="NA" selected="selected">NA</option>
												<option value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>		
</select>
<label>last milestone :</label>
<select name="LastMilestone" id="LastMilestone">
												<option value="NA" selected="selected">NA</option>
												<option value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>		
</select><br/>

<label>filter date :</label><br/>
<label>date de debut :</label>	
<input name="DateDebut" id="DateDebut"	type="date"/>	
<label>date de fin :</label>	
<input name="DateFin" id="DateFin"	type="date"/>	
<button type="submit" class="btn btn-default">Submit Button</button></form>
                      
<?php
if(isset($_POST['DateDebut'])&& isset($_POST['FirstMilestone'])&& isset($_POST['LastMilestone']) && isset($_POST['DateFin']))
{
	

$req = $bdd->prepare('SELECT name, PassedMilestone, PlannedMileston, report_date FROM projects WHERE report_date BETWEEN
? AND ? AND PassedMilestone BETWEEN ? AND ? ORDER BY report_date');
$req->execute(array($_POST['DateDebut'],$_POST['DateFin'],$_POST['FirstMilestone'],$_POST['LastMilestone']));
?>
<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>project name</th>
                                        <th>passed_milestone</th>
                                        <th>planned_milestone</th>
                                        <th>report_date</th>
                                    </tr>
                                </thead>
<?php while ($donnees = $req->fetch()){ ?>
                             
                                    <tr>
                                        <td><?php echo $donnees['name']?></td>
                                        <td><?php echo $donnees['PassedMilestone']?></td>
                                        <td><?php echo $donnees['PlannedMileston']?></td>
                                        <td><?php echo $donnees['report_date']?></td>
									</tr>
<?php } } else  echo 'remplissez les cases'; ?>
 </table>

<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 800px; margin: 0 auto"></div>
 							
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script src="graph.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
