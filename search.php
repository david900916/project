<form action="" method="POST">
<input type="text"  name="UserID" value="" placeholder="名稱" required>
<input type="submit" name="Button" value="查詢">
<a href="User Manager AP.php">返回</a>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$dsn = "mysql:host=localhost;dbname=test2";
		$db = new PDO($dsn, 'root','');
		$id=$_POST['UserID'];
		if(isset($_POST['Button'])){ 
		$sql=$db->query("SELECT * FROM user WHERE UserID='$id'");
		$row=$sql->fetch();
		print_r($row);
		}
}
?>