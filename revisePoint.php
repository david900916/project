<?php session_start(); ?>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<form action="" method="POST">
<h2>修改分數紀錄</h2>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<input type="text"  name="UID" value="" placeholder="名稱" required>
<input type="submit" name="search" value="查詢">
<button onclick="copyToClipboard('$x[$i]')">Copy TEXT 1</button>
<a href="PointManagerAP.php">返回</a>
<a href="HOME.php">返回首頁</a>
</form>
<?php
if($_SESSION['UserID']!=NULL){
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$dsn = "mysql:host=localhost;dbname=test2";
$db = new PDO($dsn, 'root','');
$MID=$_SESSION['UserID'];
$UID=$_POST['UID']; 
 if(isset($_POST['search'])){ 
 $result = $db->query("SELECT * FROM quest WHERE MID='$MID'and UID='$UID'");
 $num = $result->rowCount();
 $i=0;
 while ($row = $result->fetch()) {
  // <p id="$x[i]">"給:$row[3]時間:$row[1]事件:$row[4]分數:$row[5]<br>"</p>
   
   $X[$i]=printf("給:$row[3]時間:$row[1]事件:$row[4]分數:$row[5]<br>");
   $i++;
  }
for($i=0;$i<$num;$i++)
	//echo <button onclick="copyToClipboard('$x[$i]')">Copy TEXT 1</button> ;
	 echo "<input type='button' value='複製紀錄$i' onclick=copyToClipboard('#x[$i]')>";
 /*$num =Count($row);
  printf( "$num");*/
}		
}
	}
	else{
       echo '您無權限觀看此頁面!';
       echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}


?>