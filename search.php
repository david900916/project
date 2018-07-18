<form action="" method="POST">
<h2>查詢帳戶
<input type="text"  name="UserID" value="" placeholder="名稱" required>
<input type="submit" name="Button" value="查詢">
<a href="UserManagerAP.php">返回</a>
<a href="HOME.php">返回首頁</a></h2>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $dsn = "mysql:host=localhost;dbname=test2";
 $db = new PDO($dsn, 'root','');
 $id = $_POST['UserID'];
 if(isset($_POST['Button'])){ 
  $result = $db->query("SELECT * FROM user WHERE UserID='$id'");

  if ($row = $result->fetch()) {
   printf($row[1]);
  }
  //$row=$sql->fetch();
  // $row = mysqli_fetch_row($sql);
  // print_r($row);
 }
}