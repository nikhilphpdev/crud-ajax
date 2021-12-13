<?php
include'config.php';
if(isset($_POST))
{ 
  print_r($_POST);
  $id=  $_POST['id'];
   $name=  $_POST['name'];
	$email= $_POST['email'];
	$gender=$_POST['gender'];
	$state= $_POST['state'];
	$dob  = $_POST['dob'];

    if (0 < $_FILES['up_file']['error']) {
    echo 'Error: ' . $_FILES['up_file']['error'] . '<br>';
   }
   else{ 
	$photo ='img/'. $_FILES['up_file']['name'];
	move_uploaded_file($_FILES['up_file']['tmp_name'],'img/'. $_FILES['up_file']['name']);
   }
//print_r($_POST);
  $sql=$library->user[$id];
  $data= array(
        "name"=>$name,
        "email"=>$email,
        "gender"=>$gender,
        "state"=>$state,
        "dob"=>$dob,
        "photo"=>$photo 
     );
$result = $sql->update($data);
if($result==true)
{
  echo "success";
 
}
else{
  echo "failed";
}

}

?>