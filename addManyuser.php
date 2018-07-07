<form action="" method="POST">
 創建
 <input  required type="number" name="first" min="1" max="40" value="1">
 到
 <input  required type="number" name="last" min="1" max="40" value="40" >
 號
 <BR><input type="text"   name="UserID" value="" placeholder="第一位帳號" required>
     <input type="text"   name="Passwd" value="" placeholder="第一位密碼" required>
	  <input type="submit" name="button" value="確定">
</form>
<?php
 $first=$_POST['first'];
 $last=$_POST['last'];
  

?>