<form method = "get" action="">



<label>ชื่อ-นามสกุล<input type="text" name ="c_name"/></label><br>
<label>เบอร์ติดต่อ<input type="text" name ="c_tel"/></label><br>
<label>ที่อยู่<input type="text" name ="c_address"/></label><br>
<label>Email<input type="text" name ="c_email"/></label><br>

<input type="hidden" name="controller" value="customer"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>