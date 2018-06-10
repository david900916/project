<html>
<body>
<h2>點卷新增</h2>
<form action="project-php.php" method="POST">
    <input type="text"   name="ticketname" value="" placeholder="點卷名稱" required>
    <input type="text" 	 name="price" value="" placeholder="所需點數" required>
    <input type="submit" name="addticketButton" value="新增" >
	<input type="submit" name="deleteticketButton" value="刪除">
	<input type="submit" name="reviseticketButton" value="修改">
	<input type="submit" name="inquireticketButton" value="查詢">
	
<h2>用戶新增</h2>

    <input type="text"   name="name" value="" placeholder="名稱" required>
	<input type="text"   name="account" value="" placeholder="帳號" required>
    <input type="text"   name="password" value="" placeholder="密碼" required>
    <input type="submit" name="adduserButton" value="新增">
	<input type="submit" name="deleteuserButton" value="刪除">
	<input type="submit" name="reviseuserButton" value="修改">
	<input type="submit" name="inquireuserButton" value="查詢">
	
</form>
</body>
</html>
