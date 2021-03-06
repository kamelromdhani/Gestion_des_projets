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
$req=$bdd->prepare('SELECT * FROM projects WHERE
id_projet=?  ');
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
               <!--  <li class="dropdown">
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
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Report</a>
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
                           add a project 
						   
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
							<legend>PROJECT DETAILS</legend>
							<input class="form-control" type="hidden" name="id_projet" value="<?php echo $donnees['id_projet'];?>">
                                <label>PROJECT/ACTIVITY NAME :</label>
                                <input class="form-control" type="text" name="project_name" value="<?php echo $donnees['name'];?>">

								 <label>PROJECT/ACTIVITY MANAGER : </label>
                                <input class="form-control" type="text" name="project_manager" value="<?php echo $donnees['manager'];?>" >
								 <!--<label>MANAGER :</label>
                                <input class="form-control" type="text" name="manager" placeholder="MANAGER :">-->
								<label>PROJECT CODE :</label>
                                <input class="form-control" type="text" name="project_code" value="<?php echo $donnees['code'];?>">
								<div class="form-group">
                                <label>PROJECT LEAD</label>
								<?php if($donnees['optionsRadios']=="yes")
								{
								?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="yes" value="yes" checked>yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="no" value="no">no
                                    </label>
                                </div>
								<?php }
								 if($donnees['optionsRadios']=="no")
								{
								?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="yes" value="yes" >yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="no" value="no" checked>no
                                    </label>
                                </div>
								<?php }?>
                            </div>
							
							
								
								<label>direction : </label>
                                <input class="form-control" type="text" name="direction" value="<?php echo $donnees['direction'];?>" >
								</br>
								<label>REPORT DATE :</label>
                                <input type="date" name="report_date" class="form-control" value="<?php echo $donnees['report_date'];?>">
								</fieldset>
                            </div>

                            <div class="form-group">
                                <label>File input</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
							<fieldset>
							<legend>SCOPE MANGMENT</legend>
                                <label>PROJECT/ACTIVITY DESCRIPTION </label>
                                <textarea class="form-control" type="text" name="project_description"    rows="10"><?php echo $donnees['project_description'];?></textarea>
								 <div class="col-lg-6">
                        <label>PROJECT RAG STATUS</label>
                       
                            <table class="table table-bordered table-hover table-striped">
								<tr>
									<th>item</th>
									<th>RAG</th>
									<th> schedule</th>
									<th>cost</th>
									<th>quality</th>
								</tr>
								<tr>
									<td> schedule</td>
									<td><select name="SchedualList" id="SchedualList">
									<?php if($donnees['SchedualList']=="red")
									{?>
											<option selected="select" value="red">red</option>
											<option value="amber">amber</option>
											<option value="green">green</option>
											<?php }
											 if($donnees['SchedualList']=="amber")
									{?>
											<option  value="red">red</option>
											<option selected="select" value="amber">amber</option>
											<option value="green">green</option>
											<?php }
											 if($donnees['SchedualList']=="green")
									{?>
											<option selected="select" value="red">red</option>
											<option value="amber">amber</option>
											<option selected="select" value="green">green</option>
											<?php }?>
										</select></td>
									<td rowspan="3"><image src="<?php echo $donnees['SchedualList'];?>.png" id="SchedualImage"/></td>
									<td rowspan="3"><image src="<?php echo $donnees['CostList'];?>.png" id="CostImage"/></td>
									<td rowspan="3"><image src="<?php echo $donnees['QualityList'];?>.png" id="QualityImage"/></td>
								</tr>

								<tr>
									<td>COST</td>
									<td><select name="CostList" id="CostList" >
									<?php if($donnees['CostList']=="red")
									{?>
											<option selected="select" value="red">red</option>
											<option  value="amber">amber</option>
											<option value="green">green</option>
											<?php }
									 if($donnees['CostList']=="amber")
									{?>
											<option value="red">red</option>
											<option selected="select" value="amber">amber</option>
											<option value="green">green</option>
											<?php }
										 if($donnees['CostList']=="green")
									{?>
											<option value="red">red</option>
											<option value="amber">amber</option>
											<option selected="select"  value="green">green</option>
											<?php }?>
										</select></td>
								</tr>

								<tr>
									<td>QUALITY</td>
									<td><select name="QualityList" id="QualityList" >	
									<?php 
									 if($donnees['QualityList']=="red")
									{?>
											<option selected="select"   value="red">red</option>
											<option value="amber">amber</option>
											<option value="green">green</option>
										<?php }
										
									 if($donnees['QualityList']=="amber")
									{?>
											<option value="red">red</option>
											<option selected="select"   value="amber">amber</option>
											<option   value="green">green</option>
										<?php }
										 
									 if($donnees['QualityList']=="green")
									{?>
											<option value="red">red</option>
											<option value="amber">amber</option>
											<option selected="select"  value="green">green</option>
										<?php }?>
										</select></td>
								</tr>
							 </table>
							 <label>SCHEDULE MANAGMENT</label>
							 <table class="table table-bordered table-hover table-striped">
								<tr>
									<th></th>
									<th>passed milestone</th>
									<th>planned milestone</th>
								</tr>
								<tr>
										<td>Date</td>
										<td><input type="date" name="PassedMilestoneDate" id="PassedMilestoneDate" value="<?php echo $donnees['PassedMilestoneDate'];?>" /></td>
										<td><input type="date" name="PlannedMilestoneDate" id="PlannedMilestoneDate" value="<?php echo $donnees['PlannedMilestoneDate'];?>" /></td>
								</tr>
								<tr>
								<?php
								function verif($v,$b)
								{

									if($v==$b)
									{
										return 'selected="select"' ;
									}
								}
								?>
											<td>milestone</td>
											<td>
												<select name="PassedMilestone" id="PassedMilestone" selected="<?php echo $donnees['PassedMilestone'];?>">
												<?php 
												 if($donnees['PassedMilestone']=="NA")
												{?>
												<option selected="select"  value="NA">NA</option>
												<option value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												 
												 if($donnees['PassedMilestone']=="T0")
												{?>
												<option value="NA">NA </option>
												<option selected="select" value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												if($donnees['PassedMilestone']=="T1")
												{?>
												<option value="NA">NA</option>
												<option value="T0">T-0</option>
												<option selected="select" value ="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												if($donnees['PassedMilestone']=="T2")
												{?>
												<option value="NA">NA</option>
												<option  value="T0">T-0</option>
												<option  value ="T1">T-1</option>
												<option selected="select" value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												if($donnees['PassedMilestone']=="T3")
												{?>
												<option value="NA">NA</option>
												<option value="T0">T-0</option>
												<option  value ="T1">T-1</option>
												<option value="T2">T-2</option>
												<option selected="select" value="T3">T-3</option>
												<?php }?>
												</select>
											</td>
											<td><select name="PlannedMileston" id="PlannedMileston">
												<?php if($donnees['PlannedMileston']=="NA")
												{?>
												<option selected="select" value="NA">NA</option>
												<option  value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												 if($donnees['PlannedMileston']=="T0")
												{?>
												<option value="NA">NA</option>
												<option selected="select" value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												 if($donnees['PlannedMileston']=="T1")
												{?>
												<option value="NA">NA</option>
												<option value="T0">T-0</option>
												<option selected="select" value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												 if($donnees['PlannedMileston']=="T2")
												{?>
												<option value="NA">NA</option>
												<option value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option selected="select"  value="T2">T-2</option>
												<option value="T3">T-3</option>
												<?php }
												 if($donnees['PlannedMileston']=="T3")
												{?>
												<option value="NA">NA</option>
												<option value="T0">T-0</option>
												<option value="T1">T-1</option>
												<option value="T2">T-2</option>
												<option selected="select" value="T3">T-3</option>
												<?php }?>
												</select></td>
								</tr>						
								</table>
								</fieldset>
                        </div>
                    
					
                </div>
                            </div>
								<fieldset>
								<legend>KEY ACHIEVMENT/PROGRESS</legend>
									<label>DESCRIPTION </label>
									<textarea class="form-control" type="text" name="kap_description" rows="10"><?php echo $donnees['kap_description'];?></textarea>
									<label>DELIVRABLE NAME 1 :</label>
                                <input class="form-control" type="text" name="DELIVRABLE_NAME1" value="<?php echo $donnees['DELIVRABLE_NAME1'];?>">
								<label>DELIVRABLE NAME 2 :</label>
                                <input  class="form-control" type="text" name="DELIVRABLE_NAME2" value="<?php echo $donnees['DELIVRABLE_NAME2'];?>">
								<legend>NEXT STEP</legend>
								<label>DESCRIPTION </label>
									<textarea class="form-control" type="text" name="ns_description"  rows="10"><?php echo $donnees['ns_description'];?></textarea>
									<legend>POTENTIEL RED FLAG</legend>
								<label>DESCRIPTION </label>
									<textarea class="form-control" type="text" name="prf_description" rows="10"><?php echo $donnees['prf_description'];?></textarea>
								<legend>OTHER COMMENT(IF ANY)</legend>
								<label>DESCRIPTION </label>
									<textarea class="form-control" type="text" name="oc_description" rows="10"><?php echo $donnees['oc_description'];?></textarea>
								</fieldset>
								
                            <!-- <div class="form-group">
							
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 3
                                    </label>
                                </div>
                            </div> -->

                           <!--  <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">3
                                </label>
                            </div> -->

                            </br>

                           <!--  <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                </label>
                            </div> -->

                           <!--  <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div> -->

                           <!--  <div class="form-group">
                                <label>Multiple Selects</label>
                                <select multiple class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div> -->

                            <!--<input type="submit" value="valider_t" onclick="f1.action='target.php'">-->
                            <button type="submit" onclick="f1.action='projetres.php'"  class="btn btn-primary btn-lg">edit</button>
							<button type="submit" onclick="f1.action='projetdel.php'" class="btn btn-primary btn-lg">delete</button>
							<!--<button type="submit" onclick="f1.action='projetadd.php'"  class="btn btn-default">add Button</button>-->

                        </form>
						

                    </div>
                  <!--   <div class="col-lg-6">
                        <h1>Disabled Form States</h1>

                        <form role="form">

                            <fieldset disabled>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Disabled Button</button>

                            </fieldset>

                        </form>

                        <h1>Form Validation</h1>

                        <form role="form">

                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>

                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>

                        </form>

                        <h1>Input Groups</h1>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>

                        </form>

                        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>

                    </div> -->
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
<script>	document.getElementById('logo').onclick=function(){var gotosofrecom= window.open("http://www.sofrecom.com/");}</script>

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
