<?php
//require 'pdo.config';
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
    $sql="SELECT * FROM products";	
    $result=$db->query($sql);
    $num = $result->rowCount();
    $num +=1;
	}
	//==========新增點卷==============
    if(isset($_POST['addtickButton']))//新增此票卷資料
    {
    $db->query("INSERT INTO products ( id, name, price) VALUES ('$num','$ticketname','$price')");
    }
    if(isset($_POST['deleteticketButton'])) //刪除此票卷資料
    {
    $db->query("DELETE FROM products WHERE name ='$ticketname' ");
    }
    if(isset($_POST['reviseticketButton']))//修改此票卷資料
    {
    $sql = $db->query("UPDATE `products` SET `price` = '$price' WHERE name ='$ticketname' "); 
    }
	if(isset($_POST['inquireticketButton']))//搜尋票卷資料
	{ 
    $rs=$db->query("SELECT * FROM products where name=$ticketname and  price=$price");
    $result= $rs ->fetch();
    echo '<pre>',print_r($result),'</pre>';
    }
	//==========新增用戶==============
    if(isset($_POST['adduserButton']))//新增此使用者資料
    {
    $db->query("INSERT INTO users ( id, name,account, password) VALUES ( '$num' ,'$name','$account','$password')"); 
    
	}
    if(isset($_POST['deleteuserButton']))//刪除此使用者資料
    {
    $db->query("DELETE FROM users WHERE name ='$name' "); 
    }
    if(isset($_POST['reviseuserButton']))//修改此使用者資料
    {
    $db->query("UPDATE `users` SET `password` = '$password' WHERE name ='$name' "); 
    }
    if(isset($_POST['inquireuserButton']))//搜尋此使用者資料
    {
    $rs=$db->query("SELECT * FROM users where name=$name and account=$account and password=$password");
    $result= $rs ->fetch();
    echo '<pre>',print_r($result),'</pre>';
    }
	 header("refresh:3;URL=http://localhost/project-html.php");
	 
	//$sql->execute(); //執行
	//if (!$result) echo "New OK";
	//================================
	
}
?>
3秒後跳回
