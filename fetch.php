<?php 
include'config.php';
$stmt=$library->user();

foreach ($stmt as  $row) {
$data[] = array("id" => $row["id"], 
	         "name" => $row["name"], 
	         "email" => $row["email"],
	         "gender"=>$row["gender"],
	         "state"=>$row["state"],
	         "dob"=>$row["dob"],
	         "photo"=>$row["photo"],

	      );

}
/*echo"<pre>";
print_r($data);
echo"<pre>";*/
echo json_encode($data);
  exit;
?>
