<?php
include 'dbconst.php';

class signupclass{

private $con;
/** A constructor section **/
public function __construct(){
	$this->dbcon();
}
public function dbcon(){
  GLOBAL $db_name,$db_host,$db_pass,$db_user;
  $this->con =mysqli_connect($db_host,$db_user,$db_pass,$db_name);
		if(mysqli_connect_errno())
			die('Database connection Error');
			else{
			}
	}

/** Insert into Name Category **/

public function name_id(){
    $name = htmlspecialchars($_POST['name']);
    if($sql= $this->con->prepare('INSERT INTO name_category(name) VALUES(?)')){
    $sql->bind_param("s",$name);
	$sql-> execute();
    }
	else{
     echo "The issue is:".$this->con->Error;
	} 
}

public function details(){

 $name = htmlspecialchars($_POST['name']);
 $number = htmlspecialchars($_POST['prof']);
 $content = htmlspecialchars($_POST['content']);
 $phone = htmlspecialchars($_POST['Phone']);
 $location =htmlspecialchars($_POST['location']);
 $points = ( $number*0.15)*($content*2);

 if($query= $this->con->prepare('INSERT INTO details(name,proffessionals,contents,Phone,Location,totalpoints) VALUES(?,?,?,?,?,?)')){
    $query->bind_param("siiisd", $name,$number, $content,$phone,$location,$points);
    $query->execute();
    
 }
 else{
echo "The error is :".$this->con->error;
 }
}

public function get_name_id(){

$selec =$this->con->prepare('SELECT * FROM name_category ORDER BY id DESC');
$selec->execute();
$arr = array();
$selec_result = $selec->get_result();//puts it in an object form

while($row =$selec_result->fetch_assoc()){
$obj = new stdClass();
$id_no[] = $row['id'];
//$obj->id = $row['id'];
$obj->name = $row['name'];
$arr[]=$obj;
}
return $arr;
}

public function fetch_details(){

  $sql = $this->con->prepare('SELECT * FROM details ORDER BY totalpoints DESC');
  $sql->execute();
  $arr = array();
  $result =  $sql->get_result();//puts it in an object form

  while($row = $result->fetch_assoc()){
    $obj = new stdClass();
    $obj->id=$row['id'];
    $obj->name =$row['name'];
    $profnub = $obj->proffessionals = $row['proffessionals'];
    $contnub =  $obj->contents = $row['contents'];
    $obj->Phone =$row['Phone'];
    $obj->Location = $row['Location'];
    //$obj->totalpoints = $row['totalpoints'];
    $obj->totalpoints = (0.15* $profnub)*(2*$contnub);
    $arr[]=$obj;
  }
  return $arr;
}

public function log_details(){

$name = htmlspecialchars($_POST['Name']);
$profname = htmlspecialchars($_POST['profname']);
$content =  htmlspecialchars($_POST['content']);

if($sql=$this->con->prepare('INSERT INTO log(Compititors_Name,Proffessionals_Name,Content_Title) VALUES (?,?,?)')){
   $sql->bind_param('sss',$name,$profname,$content);
   $sql->execute();
}

else{
echo "There was an error".$this->con->error;
}


}

public function fetch_log(){

  $sql = $this->con->prepare('SELECT * FROM log ORDER BY Compititors_Name ASC');
  $sql->execute();
  $arr = array();
  $log_result = $sql->get_result(); //fetches result as an object

  while( $row = $log_result->fetch_assoc()){
    $obj = new stdClass();
    $obj->id = $row['id'];
   $obj->name = $row['Compititors_Name'];
   $obj->proffname = $row['Proffessionals_Name'];
   $obj->conttitle = $row['Content_Title'];
   $arr[]=$obj;
  }
  return $arr;
}

public function update_detail(){
$upname = htmlspecialchars($_POST['name']);
$upprof = htmlspecialchars($_POST['prof']);
$upcontent = htmlspecialchars($_POST['content']);
$upPhone = htmlspecialchars($_POST['Phone']);
$uplocation = htmlspecialchars($_POST['location']);
$uppoints = ( $upprof*0.15)*($upcontent*2);;
$upsql = "UPDATE details SET name='$upname',proffessionals='$upprof',contents='$upcontent',Phone='$upPhone',Location='$uplocation',totalpoints='$uppoints'";
if(!$this->con->query($upsql)){
  echo "update error".$this->con->error;
}
else{
   echo'update successfull';
}


}

}
$classobj = new signupclass;
?>

