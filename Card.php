<form>
<CENTER>請勾選您想購買的項目<br>
<input type="checkbox" value="卡片1" name="sport[]"> 卡片 1<br><P ALIGN=LEFT、CENTER、RIGHT>
<input type="checkbox" value="卡片2" name="sport[]"> 卡片 2<br><P ALIGN=LEFT、CENTER、RIGHT>
<input type="checkbox" value="卡片3" name="sport[]"> 卡片 3<br><P ALIGN=LEFT、CENTER、RIGHT>
<input type="submit" name="Button" value="確定購買"><P ALIGN=LEFT、CENTER、RIGHT>
</form>
<?php
if(isset($_POST['Button'])){
	$sport = $_POST [“sport“];
	$myallsport = implode (“,“, $sport);
	echo $myallsport;
//if($('Product_1').attr('checked'))
 
//if($('Product_1').attr('checked'))

//if($('Product_1').attr('checked'))
}
?>