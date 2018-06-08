<html>
<body>
<h2>用戶新增</h2>
<form action="" method="POST">
    <input type="text" name="name" value="" placeholder="名稱" required>
	<input type="text" name="account" value="" placeholder="帳號" required>
    <input type="text" name="password" value="" placeholder="密碼" required>
    <input type="submit" name="addButton" value="新增">
	<input type="submit" name="deleteButton" value="刪除">
	<input type="submit" name="reviseButton" value="修改">
	<input type="submit" name="inquireButton" value="查詢">
	
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dsn = "mysql:host=localhost;dbname=test";
    $db = new PDO($dsn, 'root', '');
    $name = $_POST['name'];	  //輸入的名稱
	$account=$_POST['account']; //輸入的帳號
    $password = $_POST['password']; //輸入的密碼
	//=========取得查詢結果筆數=======
	$sql="SELECT * FROM users";	
	$result=$db->query($sql);
	$num = $result->rowCount();
	$num +=1;
	
	//================================
	
	//==========新增用戶==============
	if(isset($_POST['addButton'])){
      $db->query("INSERT INTO users ( id, name,account, password) VALUES ( '$num' ,'$name','$account','$password')"); //新增此資料
   }
	if(isset($_POST['deleteButton'])){
	$db->query("DELETE FROM users WHERE name ='$name' "); //刪除此資料
	}
	if(isset($_POST['reviseButton'])){
	$db->query("UPDATE `users` SET `password` = '$password' WHERE name ='$name' "); //修改此資料
	}
	if(isset($_POST['inquireButton'])){
		$rs=$db->query("SELECT * FROM users where name=$name and account=$account and password=$password");
		$result= $rs ->fetch();
		echo '<pre>',print_r($result),'</pre>';
		}
	//$sql->execute(); //執行
	//if (!$result) echo "New OK";
	//================================
	
}
?>
</body>
</html>
