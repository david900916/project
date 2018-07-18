<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="indexfinsh.php">
帳號：<input type="text" name="UserID" /> <br>
密碼：<input type="password" name="Passwd" /> <br>
<input type="submit" name="button" value="登入" />
<a href="adduser.php">申請帳號</a>
</form>