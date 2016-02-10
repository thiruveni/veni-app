<?php

$conn = mysql_connect("localhost","root","");  
if(!$conn){  
  die('Could not connect: '.mysql_error());  
}  
mysql_select_db("db_test",$conn);

$query = "INSERT INTO `register` (name,age,email,address) VALUES ('{$_POST['name']}','{$_POST['age']}','{$_POST['email']}','{$_POST['address']}')";

     $res = mysql_query($query);

	 if($res)
	 
{
		echo "1";
	
}
else
{
	echo "2";
}
	 

mysql_close($conn);   
//header("location: form.php");


?>  