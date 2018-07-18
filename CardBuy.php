<?php session_start(); ?>
<?php 
if($_SESSION['UserID']=="")
	printf("無使用者登入");
else{
	$name=$_SESSION['UserID'];
printf("使用者$name");
}
?>
<form>
<h2>卡片兌換</h2>
<CENTER>請勾選您想購買的項目<br>
<br><input type="checkbox" value="卡片1" name="sport[]"> 卡片 1<br>
<br><input type="checkbox" value="卡片2" name="sport[]"> 卡片 2<br>
<br><input type="checkbox" value="卡片3" name="sport[]"> 卡片 3<br>
<br><input type="submit" name="Button" value="確定購買">
<br><input type="submit" name="search" value="查詢">
</form>
<?php
if($_SESSION['UserID']!=NULL){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$dsn = "mysql:host=localhost;dbname=test2";
$db = new PDO($dsn, 'root','');
$MID=$_SESSION['UserID']; 
 if(isset($_POST['search'])){ 
 $result = $db->query("SELECT * FROM card ");
 $num = $result->rowCount();
 }
 while ($row = $result->fetch()) {
	 printf("CID:$row[0] name:$row[1]所需點數:$row[3] 剩餘數量:$row[4]職業限制:$row[5]");}
 for($i=1;$i<=$num;$i++)
	 echo"<input type='checkbox' value='卡片$i' name='sport[$i]'>";
}
}
else{
       echo '您無權限觀看此頁面!';
       echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
 ?>