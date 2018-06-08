<html>
<body>
<h2>點卷新增</h2>
<form action="" method="POST">
    <input type="text"   name="ticketname" value="" placeholder="點卷名稱" required>
    <input type="text" 	 name="price" value="" placeholder="所需點數" required>
    <input type="submit" name="addticketButton" value="新增">
	<input type="submit" name="deleteticketButton" value="刪除">
	<input type="submit" name="reviseticketButton" value="修改">
	<input type="submit" name="inquireticketButton" value="查詢">
	
<h2>用戶新增</h2>
<form action="" method="POST">
    <input type="text"   name="name" value="" placeholder="名稱" required>
	<input type="text"   name="account" value="" placeholder="帳號" required>
    <input type="text"   name="password" value="" placeholder="密碼" required>
    <input type="submit" name="adduserButton" value="新增">
	<input type="submit" name="deleteuserButton" value="刪除">
	<input type="submit" name="reviseuserButton" value="修改">
	<input type="submit" name="inquireuserButton" value="查詢">
	
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dsn = "mysql:host=localhost;dbname=test";
    $db = new PDO($dsn, 'root', '');
	$ticketname=$_POST['ticketname'];//輸入票卷的名稱
	$price = $_POST['price']; //輸入票卷的點數
    $name = $_POST['name'];	  //輸入使用者的名稱
	$account=$_POST['account']; //輸入使用者的帳號
    $password = $_POST['password']; //輸入使用者的密碼
	//=========取得查詢結果筆數=======
	if(isset($_POST['adduserButton'])){// 判斷新增票卷按鈕
	$sql="SELECT * FROM users";	
	$result=$db->query($sql);
	$num = $result->rowCount();
	$num +=1;
	}
	if(isset($_POST['addtickButton'])){//判斷新增使用者按鈕
	$sql2="SELECT * FROM products";	
	$result=$db->query($sql);
	$num = $result->rowCount();
	$num2 +=1;
	}
	//==========新增點卷==============
	if(isset($_POST['addtickButton'])){
      $db->query("INSERT INTO products ( id, name, price) VALUES ( '$num2' ,'$ticketname', '$price')");//新增此票卷資料
   }
	if(isset($_POST['deleteticketButton'])){
	$db->query("DELETE FROM products WHERE name ='$ticketname' "); //刪除此票卷資料
	}
	if(isset($_POST['reviseticketButton'])){
	$sql = $db->query("UPDATE `products` SET `price` = '$price' WHERE name ='$ticketname' "); //修改此票卷資料
	}
	if(isset($_POST['inquireticketButton'])){ //搜尋票卷資料
		$rs=$db->query("SELECT * FROM products where name=$ticketname and  price=$price");
		$result= $rs ->fetch();
		echo '<pre>',print_r($result),'</pre>';
		}
	//==========新增用戶==============
	if(isset($_POST['adduserButton'])){
      $db->query("INSERT INTO users ( id, name,account, password) VALUES ( '$num' ,'$name','$account','$password')"); //新增此使用者資料
   }
	if(isset($_POST['deleteuserButton'])){
	$db->query("DELETE FROM users WHERE name ='$name' "); //刪除此使用者資料
	}
	if(isset($_POST['reviseuserButton'])){
	$db->query("UPDATE `users` SET `password` = '$password' WHERE name ='$name' "); //修改此使用者資料
	}
	if(isset($_POST['inquireuserButton'])){//搜尋此使用者資料
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
