<?php session_start(); ?>
<?php 
if($_SESSION['UserID']=="")
	printf("無使用者登入");
else{
	$name=$_SESSION['UserID'];
printf("使用者$name");
}
?>
<form name="form" method="post" action="indexfinsh.php">
<h2>使用者資料管理</h2>
<a href="adduser.php">申請帳號</a>
<a href="revise.php">修改帳號</a>
<a href="delete.php">刪除帳號</a>
<a href="search.php">查詢帳號</a>
<a href="HOME.php">返回首頁</a>
</form>