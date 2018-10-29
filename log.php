<!DOCTYPE html>
<html>
<head>
  <title>Signup log</title>
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
    <li class="" style="font-weight: bolder;"><a href="" style="color:#06967D" >ABOUT</a></li>
    
        <li class="dropdown" style="font-weight: bolder;">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#06967D;text-decoration:none;">FORM
        <span class="caret"></span></a>
        <ul class="dropdown-menu" align="center">
          <li align="center"><a href="#">Signup Form</a></li>
          <li align="center"><a href="#">Daily Update Form</a></li>
          
        </ul>
      </li>
    <li class="" style="font-weight: bolder;"><a href="" style="color:#06967D">LOG</a></li>
    
  </ul>
  <?php 
       include_once 'model.php';
      // $classobj->dbcon();

     ?>
  <br>
  <div class="panel-default">
    <div class="panel-heading">
      <div align="center">
        <strong>LOG TABLE </strong>
      

      </div>
    </div>

    <div class="panel-body">
      <div class="table-responsive">
        <table style="width:100%;" class="table table-hover">
          <tr>
          <th class="text-center">S/n</th>
          <th class="text-center"><i class="fa fa-user pr5"></i> Challenger's Name</th>
          <th class="text-center"><i class="fa fa-group pr5"></i> Proffessional's Name</th>
          <th class="text-center"><i class="fa fa-book pr5"></i> Contents Title</th>
    
        </tr>
        <?php $log_details=$classobj->fetch_log();
for($i=0;$i<= count($log_details)-1;$i++){
        ?>
        <tr>
          <td><?php echo $log_details[$i]->id ?></td>
          <td><?php echo $log_details[$i]->name ?></td>
          <td><?php echo $log_details[$i]->proffname ?></td>
          <td><?php echo $log_details[$i]->conttitle?></td>
        </tr>
        <?php } ?>
      </table>
      </div>
      
    </div>

  </div>
</div>


  

</body>
</html>
