<!DOCTYPE html>
<html>
<head>
	<title>Signup challenge</title>
	<?php include 'metalinks.php';
			include 'model.php';


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
		<li class="" style="font-weight: bolder;"><a href="" style="color:#06967D">MYREWIN</a></li>
		<li class="" style="font-weight: bolder;"><a href="" style="color:#06967D">ABOUT</a></li>
		<li class="" style="font-weight: bolder;"><a href="" style="color:#06967D">FORM</a></li>
		<li class="" style="font-weight: bolder;"><a href="" style="color:#06967D">LOG</a></li>
		
	</ul>
	<br>
	<div class="panel-default">
		<div class="panel-heading">
			<div align="center">
				<strong>CHALLENGE TABLE </strong>
			

			</div>
		</div>
		<div align="center"> <a href="#myModal" class ="btn btn-success" data-toggle="modal"><i class="fa fa-plus pr5"></i>ADD MEMBER</a>
			<a href="#myid" class ="btn btn-success" data-toggle="modal"><i class="fa fa-plus pr5"></i>ADD ID</a>
        
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table style="width:100%;" class="table table-hover">
				<tr>
					<th class="text-center">Id <i class="fa fa-sort float-right"></i></th>
					<th class="text-center">Challenger <i class="fa fa-sort float-right"></i> </th>
					<th class="text-center">Proffessional <i class="fa fa-sort float-right"></i> </th>
					<th class="text-center">Contents <i class="fa fa-sort float-right"></i></th>
					<th class="text-center">Phone <i class="fa fa-sort float-right"></i></th>
					<th class="text-center">Location <i class="fa fa-sort float-right"></i></th>
					<th class="text-center">Point <i class="fa fa-sort float-right"></i></th>
					<th class="text-center">Action<i class="fa fa-sort float-right"></i></th>
				</tr>
				<?php $details =$classobj->fetch_details();

				$val=count($details)-1;
				$cc = range(0,$val,1);
                foreach ($cc as $k) {
               //  echo "This is".$k."<br>";
                                    }
					for($i=0;$i<=count($details)-1;$i++){
				?>
				<tr>
					<td><?php echo $details[$i]->id ?></td>
					<td><?php echo $details[$i]->name ?></td>
					<td><?php echo $details[$i]->proffessionals ?></td>
					<td><?php echo $details[$i]->contents?></td>
					<td><?php echo $details[$i]->Phone?></td>
					<td><?php echo $details[$i]->Location?></td>
					<td><?php echo $details[$i]->totalpoints?></td>
					<td><a href="#editmodal" class="btn btn-success" data-toggle="modal">update</a><a href="" class="btn btn-danger">delete</a>
						</td>
				</tr>


				<?php 
  
			} 

				?>
			</table>
<?php
			for($i=0;$i<=count($details)-1;$i++){ ?>

<!-- Beginning of Edit modal -->

	<div id="editmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#06967D">UPDATE DETAILS</h4>
         
      </div>
      <div class="modal-body" style="background-color:" >
      <form  method="POST" action="" enctype=&quot;multipart/form-data&quot;>
   <div class="form-group">
  <label for="name">Challengers Name:</label>
  <select class="form-control" type="text" name="name">
    <?php $name_key = $classobj->get_name_id();
for($i=0;$i<=count($name_key)-1;$i++){ ?> <option><?php echo $name_key[$i]->name ?></option> <?php } ?>
  </select>

 
</div>
  <div class="form-group"><label>Number of proffessionals</label><input type="number" name="prof" class="form-control" value="<?php echo $details[$k]->proffessionals ?>"></div>
  <div class="form-group"><label>Number of contents</label><input type="number" name="content" class="form-control" value="<?php echo $details[$k]->contents ?>"></div>
       <div class="form-group"><label>Phone</label> <input type="number" name="Phone" class="form-control" value="<?php echo $details[$k]->Phone ?>"></div>
		<div class="form-group"><label>Location</label> <input type="text" name="location" class="form-control" value="<?php echo $details[$k]->Location ?>"></div>
		<div class="form-group"><label>Total Points</label> <input type="number" name="points" class="form-control" value="<?php echo $details[$k]->totalpoints ?>"></div>
		<input type="submit" class="btn btn-success" name="submit">
      </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>


		<?php }
		?>
			</div>
			
		</div>

	</div>
</div>

<?php
     	if(isset($_POST['prof'])){
     
       echo $classobj->details();

      }
      	 ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#06967D">ADD DETAILS</h4>
         
      </div>
      <div class="modal-body" style="background-color:" >
      <form  method="POST" action="" enctype=&quot;multipart/form-data&quot;>
      	<!--<div class="form-group"><label> Challengers Name:</label> <input type="text" name="name" class="form-control"></div>-->
   <div class="form-group">
  <label for="name">Challengers Name:</label>
 

  <select class="form-control" type="text" name="name">
    <?php $name_key = $classobj->get_name_id(); 
for($i=0;$i<=count($name_key)-1;$i++){ ?> <option><?php echo $name_key[$i]->name ?></option> <?php } ?>
  </select>

 
</div>
  <div class="form-group"><label>Number of proffessionals</label><input type="number" name="prof" class="form-control"></div>
      <div class="form-group"><label>Number of contents</label> <input type="number" name="content" class="form-control"></div>
       <div class="form-group"><label>Phone</label> <input type="number" name="Phone" class="form-control"></div>
		<div class="form-group"><label>Location</label> <input type="text" name="location" class="form-control"></div>
		<div class="form-group hidden"><label>Total Points</label> <input type="number" name="points" class="form-control" value=""></div>
		<input type="submit" class="btn btn-success" name="submit">
      </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>
 	<?php
           	if(isset($_POST['name'])){
       echo $classobj->name_id();
       //echo $classobj->details();

      }
      	 ?>

<div id="myid" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#06967D">ADD NAME IDENTITY</h4>
         
      </div>
      <div class="modal-body" style="background-color:" >
      <form class="form-inline" action="" method="post" enctype=&quot;multipart/form-data&quot;>
      	<div class="form-group">
      		  <label>Name</label>	<input type="text" name="name" placeholder="name" class="form-control">
      		  
      <input type="submit" name="submit" class="form-control btn btn-success">
      	</div>
    
      </form>
    
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>
	
	<!-- Beginning of Edit modal -->

	<div id="editmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#06967D">UPDATE DETAILS</h4>
         
      </div>
      <div class="modal-body" style="background-color:" >
      <form  method="POST" action="" enctype=&quot;multipart/form-data&quot;>
   <div class="form-group">
  <label for="name">Challengers Name:</label>
  <select class="form-control" type="text" name="name">
    <?php $name_key = $classobj->get_name_id();
for($i=0;$i<=count($name_key)-1;$i++){ ?> <option><?php echo $name_key[$i]->name ?></option> <?php } ?>
  </select>


</div>
  <div class="form-group"><label>Number of proffessionals</label><input type="number" name="prof" class="form-control" value="<?php echo $details[0]->proffessionals ?>"></div>
  <div class="form-group"><label>Number of contents</label><input type="number" name="content" class="form-control" value="<?php echo $details[0]->contents ?>"></div>
       <div class="form-group"><label>Phone</label> <input type="number" name="Phone" class="form-control" value="<?php echo $details[0]->Phone ?>"></div>
		<div class="form-group"><label>Location</label> <input type="text" name="location" class="form-control" value="<?php echo $details[0]->Location ?>"></div>
		<div class="form-group"><label>Total Points</label> <input type="number" name="points" class="form-control" value="<?php echo $details[0]->totalpoints ?>"></div>
		<input type="submit" class="btn btn-success" name="submit">
      </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>

  </div>
</div>

<!-- Pagination section -->
<div class="float-right"></div>

</body>
</html>
