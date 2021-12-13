<?php 
include'config.php';
if(isset($_POST)){
	/*echo '<pre>';
	print_r($_FILES);echo '</pre>';
	echo '<pre>';print_r($_POST);echo '</pre>';*/ 
	$id=$name=$email=$gender=$state=$dob='';
	$id=null;
	$name=  $_POST['name'];
	$email= $_POST['email'];
	$gender=$_POST['gender'];
	$state= $_POST['state'];
	$dob  = $_POST['dob'];

    if (0 < $_FILES['file']['error']) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
   }
   else{ 
	$photo ='img/'. $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],'img/'. $_FILES['file']['name']);
   }
 
	$sql= $library->user();
	$data = array(
     "name"=>$name,
     "email"=>$email,
     "gender"=>$gender,
     "state"=>$state,
     "dob"=>$dob,
     "photo"=>$photo
	);
	$result= $sql->insert($data);
	if($result==true){
		echo json_encode($result);
	}else{
		echo"Data not insert plase try again";
	}

}

?>