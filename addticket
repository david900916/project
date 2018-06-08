<html>
<body>
<h2>點卷新增</h2>
<form action="" method="POST">
    <input type="text" name="name" value="" placeholder="點卷名稱" required>
    <input type="text" name="price" value="" placeholder="所需點數" required>
    <input type="submit">
	
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dsn = "mysql:host=localhost;dbname=test";
    $db = new PDO($dsn, 'root', '');
    $name = $_POST['name'];	  //輸入的點卷名稱
    $price = $_POST['price']; //輸入的所需點數
	//=========取得查詢結果筆數=======
	$sql="SELECT * FROM products";	
	$result=$db->query($sql);
	$num = $result->rowCount();
	$num +=1;
	
	//================================
	
	//==========新增點卷==============
	$sql = $db->query("INSERT INTO products ( id, name, price) VALUES ( '$num' ,'$name', '$price')"); //新增此資料
	//$sql = $db->query("DELETE FROM products WHERE name ='$name' "); //刪除此資料
	//$sql = $db->query("UPDATE `products` SET `price` = '$price' WHERE name ='$name' "); //修改此資料
	
	$sql->execute(); //執行
	//if (!$result) echo "New OK";
	//================================
	
}
?>
</body>
</html>
