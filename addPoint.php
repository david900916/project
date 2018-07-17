<?php session_start(); ?>
<form action="" method="POST">
<h2>增加分數</h2>
<input type="text"  name="UserID" value="" placeholder="名稱" required>
<input type="text"  name="Item" value="" placeholder="原因" required>
<input type="text"  name="Point" value="" placeholder="分數" required>
<input type="submit" name="Button" value="確定">
<a href="PointManagerAP.php">返回</a>
<a href="HOME.php">返回首頁</a>
</form>
<?php
if($_SESSION['UserID']!=NULL){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 $dsn = "mysql:host=localhost;dbname=test2";
    $db = new PDO($dsn, 'root', '');
	
	$MID=$_SESSION['UserID'];
    $UID=$_POST['UserID']; //使用者的帳號
    $Item=$_POST['Item'];
	$Point=$_POST['Point'];
    $Date=date("Y/m/d");
	
	if(isset($_POST['Button'])){
    $sql="SELECT * FROM quest";	
    $result=$db->query($sql);
    $num = $result->rowCount();
    $num +=1;
    }
	if(isset($_POST['Button'])){
	$result=$db->query("SELECT Point FROM user WHERE UserID='$UID'");
	 if ($row = $result->fetch()) {
  $sum=$row[0]+$Point;
  }

	$sql=$db->query("INSERT INTO quest ( id,Date,MID,UID,Item,Point) VALUES ( '$num','$Date','$MID','$UID','$Item','$Point')"); 
	$sql=$db->query("UPDATE user SET Point='$sum' WHERE UserID='$UID'");
printf("目前'$UID'分數為$sum");
	}
}
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>