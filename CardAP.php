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
<h2>卡片
<a href="CardBuy.php">卡片兌換</a>
<a href="CardUse.php">卡片使用</a>
<a href="HOME.php">返回首頁</a></h2>
</form>