<?php session_start(); ?>
<?php
 $dsn = "mysql:host=localhost;dbname=test2";
    $db = new PDO($dsn, 'root', '');
	$id=$_POST['UserID'];
	$pw=$_POST['Passwd'];
	if($rs=$db->query("SELECT * FROM user where UserID=$id"))
    $result= $rs ->fetch();
if($_SESSION['UserID']!=NULL){
	echo "<span>您尚未登出請先登出</span>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=HOME.php>';
}
	else
if($result){
	
		if($pw===$result['Passwd']){
			$_SESSION['UserID'] =$id;
			echo"<span>登入成功</span>";
			 echo '<meta http-equiv=REFRESH CONTENT=1;url=HOME.php>';
		}
		else{
			echo"<span>密碼錯誤</span>";
			echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		}
	}
	else{
		echo"<span>使用者不存在</span>";
	}