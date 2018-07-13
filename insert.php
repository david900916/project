<?php
$hostname_restaurant = "localhost";//
$database_restaurant = "abc";//
$username_restaurant = "root";//
$password_restaurant = "";//
$link = mysql_pconnect($hostname_localhost, $username_root, $password_) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("set names utf8");//將資料庫設定為utf8編碼，防止中文亂碼
$sql ="INSERT INTO taipei_eat(name,tel,address) VALUES ('$_POST[name]','$_POST[tel]','$_POST[address]')";

$result = mysql_query($sql, $link) or die(mysql_error()); //執行sql語法

mysql_close($link); //關閉資料庫連結

header( "location:index.php"); //回index.php

?> 