<?php
 $dsn = "mysql:host=localhost;dbname=test2";
    $db = new PDO($dsn, 'root', '');
	$UserID=$_POST['id'];
	$Passwd=$_POST['pw'];
	if($rs=$db->query("SELECT * FROM 123 where UserID=$UserID and Passwd=$Passwd"))
    $result= $rs ->fetch();
    echo print_r($rs);
	
?>