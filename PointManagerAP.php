<?php session_start(); ?>
<<?php 
if($_SESSION['UserID']=="")
	printf("無使用者登入");
else{
	$name=$_SESSION['UserID'];
printf("使用者$name");
}
?>
<form name="form" method="post" action="indexfinsh.php">
<h2>使用者資料管理</h2>
<a href="addPoint.php">新增點數</a>
<a href="revisePoint.php">修改點數</a>
<a href="deletePoint.php">刪除點數</a>
<a href="searchPoint.php">查詢點數</a>
<a href="HOME.php">返回首頁</a>
</form>