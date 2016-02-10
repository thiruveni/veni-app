<?php
include('db.php');


$name =$_GET['name'];
echo $name;

$sql =mysql_query("select * from register where name LIKE '%".$name."%' ");


if(mysql_num_rows($sql)==0)
{
	echo "true";
	
}
else
{
	echo "false";
}

?>