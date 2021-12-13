<?php
include"config.php";
 if(!empty(isset($_POST['checking_delete'])))
 {
   // print_r($_POST);
 	$id =$_POST['id'];
 	$sql= $library->user[$id];
 	$result=$sql->delete();
 	 if($result== true)
	{
	echo "success";
	//header("location:profile.php");
	}
	else
	{
	echo "noooooo";
	}

}

?>