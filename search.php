<form action="" method="POST">
<input type="text"  name="name" value="" placeholder="名稱" required>
<input type="submit" name="Button" value="查詢">
<a href="User Manager AP.php">返回</a>
</form>
<?php
$dsn = "mysql:host=localhost;dbname=test";
		$db = new PDO($dsn, 'root', '');
		$name = $_POST['name'];
		if(isset($_POST['Button']))
	{ 
		$sql=$db->query("SELECT *FROM user_data WHERE UserID='$name'");
		$row = $sql->fetch();
	}
		?>