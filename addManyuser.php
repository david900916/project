<form action="" method="POST">
<h2>用戶新增批次新增</h2>
 創建
 <input  required type="number" name="first" min="1" max="40" value="1">
 到
 <input  required type="number" name="last" min="1" max="40" value="40" >
 號
 <BR><input type="text"   name="UserID" value="" placeholder="第一位帳號" required>
     <input type="text"   name="Passwd" value="" placeholder="第一位密碼" required>
	 <input type="text"   name="Class" value="" placeholder="班級" required>
	  <input type="submit" name="button" value="確定">
	  <a href="UserManagerAP.php">返回</a>
	<a href="HOME.php">返回首頁</a>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$dsn = "mysql:host=localhost;dbname=test2";
$db = new PDO($dsn, 'root','');
 $first=$_POST['first'];
 $last=$_POST['last'];
 $UserID=$_POST['UserID'];
 $Passwd=$_POST['Passwd'];
 $Class=$_POST['Class'];
  //if(isset($_POST['Button'])){
	  for ($first; $first<=$last;$first++,$UserID++,$Passwd++){
    $sql="SELECT * FROM user";	
    $result=$db->query($sql);
    $num = $result->rowCount();
    $num +=1;
	$sql=$db->query("INSERT INTO user ( id, name,UserID, Passwd,Class) VALUES ( '$num' ,'$first','$UserID','$Passwd','$Class')"); 
	$row = $sql->fetch();
	
	}
	if(!$row){
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=adduser.php>';
        }
}
  
?>