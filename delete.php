<?php session_start(); ?>
<h2>刪除帳戶</h2>
<a href="UserManagerAP.php">返回</a>
<a href="HOME.php">返回首頁</a>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['UserID']!=NULL)
{
        echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
        echo "要刪除的帳號：<input type=\"text\" name=\"Userid\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>