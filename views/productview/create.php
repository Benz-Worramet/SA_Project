<form method = "get" action="">


<label>Status<select name="p_status">
    <?php {
        echo"<option value ='ว่าง'>ว่าง</option>";
        echo"<option value ='เบิก'>เบิก</option>";
    }?>

</select></label><br>
<label>ชื่อสินค้า<input type="text" name ="p_name"/></label><br>
<label>ราคาที่จะขาย<input type="text" name ="p_price"/></label><br>
<label>ราคาต้นทุน<input type="text" name ="p_cost"/></label><br>


<input type="hidden" name="controller" value="product"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>