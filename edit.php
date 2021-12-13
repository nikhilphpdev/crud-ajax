<?php
   include'config.php';
  $id=str_replace('edit_', '', $_POST['id']);
    $sql= $library->user()->Where('id', $id);
foreach ($sql as  $row) {
	$rtrn['id']     =$row['id'];
	$rtrn['name']   =$row['name'];
	$rtrn['email']  =$row['email'];
	$rtrn['gender'] =$row['gender'];
	$rtrn['state']  =$row['state'];
	$rtrn['dob']    =$row['dob'];
	$rtrn['photo']  =$row['photo'];
// echo'<pre>'; print_r($rtrn);  echo '</pre>';
}

echo json_encode($rtrn);
exit();

?>