<!DOCTYPE html>
<html>
<head>
	<title>Signup challenge</title>
	<?php include 'metalinks.php';

	?>


</head>
<body class="container" style="padding-top:20px;background-color:#EAEBF3">
	<div class="col-md-10 col-md-offset-1" align="center">
				 <a href="https://myrewin.com"><img class="img-responsive visible-sm visible-xs" src="includes/img/logo.png" width="40" height="" alt="myrewin"></a>
				 <a href="https://myrewin.com"><img class="img-responsive hidden-xs hidden-sm" src="includes/img/logo.png" width="50" height="" alt="myrewin"></a>
				 
		 </div>
	<div class="col-md-10 col-md-offset-1">
	
	<ul class="nav nav-tabs nav-justified ">
		<li class="active" style="font-weight: bolder;"><a href="" style="color:#06967D">HOME</a></li>
		<li class="" style="font-weight: bolder;"><a href="https://myrewin.com/" style="color:#06967D">MYREWIN</a></li>
		<li class="" style="font-weight: bolder;"><a href="https://myrewin.com/about" style="color:#06967D" >ABOUT</a></li>
		
		    <li class="dropdown" style="font-weight: bolder;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#06967D;text-decoration:none;">FORM
        <span class="caret"></span></a>
        <ul class="dropdown-menu" align="center">
          <li align="center"><a href="https://myrewin.com/challenge/scform.php">Signup Form</a></li>
          <li align="center"><a href="https://myrewin.com/challenge/upform.php">Daily Update Form</a></li>
          
        </ul>
      </li>
		<li class="" style="font-weight: bolder;"><a href="https://myrewin.com/challenge/log.php" style="color:#06967D">LOG</a></li>
		
	</ul>
	<?php 
       include_once 'model.php';
      // $classobj->dbcon();

		 ?>
	<br>
	<div class="panel-default">
		<div class="panel-heading">
			<div align="center">
				<strong>CHALLENGE TABLE </strong>
			

			</div>
		</div>

		<div class="panel-body">
			<div class="table-responsive">
				<table style="width:100%;" class="table table-hover">
					<tr>
					<th class="text-center">S/n</th>
					<th class="text-center"><i class="fa fa-user pr5"></i> Challenger</th>
					<th class="text-center"><i class="fa fa-group pr5"></i> Proffessional</th>
					<th class="text-center"><i class="fa fa-book pr5"></i> Contents</th>
					<th class="text-center"><i class="fa fa-phone pr5"></i> Phone</th>
					<th class="text-center"><i class="fa fa-map-marker pr5"></i> Location</th>
					<th class="text-center"><i class="fa fa fa-graduation-cap pr5"></i>Point</th>
					<th class="text-center"><i class="fa fa-screen pr5"></i>Log</th>
				</tr>
				<?php $details=$classobj->fetch_details();
for($i=0;$i<= count($details)-1;$i++){
				?>
				<tr>
					<td><?php echo $details[$i]->id ?></td>
					<td><?php echo $details[$i]->name ?></td>
					<td><?php echo $no_prof=$details[$i]->proffessionals ?></td>
					<td><?php echo $no_cont=$details[$i]->contents?></td>
					<td><?php echo $details[$i]->Phone?></td>
					<td><?php echo $details[$i]->Location?></td>
					<td><?php echo $point =(0.15*$no_prof)*(2*$no_cont) ?></td>
					<td><a href="" class="btn btn-success">log</a></td>
				</tr>
				<?php } ?>
			</table>
			</div>
			
		</div>

	</div>
</div>
<div id="formmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#06967D">ADD NAME IDENTITY</h4>
         
      </div>
      <div class="modal-body" style="background-color:" >
   		
    
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>
<div class="col-md-8 col-md-offset-2 col-xs-12">
	


</div>
	

</body>
</html>
