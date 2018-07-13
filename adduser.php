<html>
<body>
<h2>用戶新增</h2>
<form action="" method="POST">
    <input type="text"   name="name" value="" placeholder="名稱" required>
	<input type="text"   name="UserID" value="" placeholder="帳號" required>
    <input type="text"   name="Passwd" value="" placeholder="密碼" required>
	<input type="text"   name="Class" value="" placeholder="班級" required>
    <input type="submit" name="adduserButton" value="新增">
	<a href="addManyuser.php">批次新增</a>
	<a href="User Manager AP.php">返回</a>
	<a href="HOME.php">返回首頁</a>
	
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $dsn = "mysql:host=localhost;dbname=test2";
    $db = new PDO($dsn, 'root', '');
    $name = $_POST['name'];	  //輸入使用者的名稱
    $UserID=$_POST['UserID']; //輸入使用者的帳號
    $Passwd = $_POST['Passwd']; //輸入使用者的密碼
	$Class=$_POST['Class'];//輸入使用者班級
	if(isset($_POST['adduserButton'])){// 判斷新增票卷按鈕
    $sql="SELECT * FROM user";	
    $result=$db->query($sql);
    $num = $result->rowCount();
    $num +=1;
    }
	if(isset($_POST['adduserButton'])){
	$db->query("INSERT INTO user ( id, name,UserID, Passwd,Class) VALUES ( '$num' ,'$name','$UserID','$Passwd','$Class')"); 
	}
}
?>