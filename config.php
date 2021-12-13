<?php 

 try{
 	include 'notorm/NotORM.php';
	$db = new PDO('mysql:host=localhost; dbname=crud','root','');
	$library = new NotORM($db);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo"connected";
}
catch(PDOEXCEPTION $e){
		echo "connection Failed: ". $e->get_Message();
}

?>