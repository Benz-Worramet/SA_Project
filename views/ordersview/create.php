<form method = "get" action="">

<label>Status<select name="o_status">
    <?php {
        echo"<option value ='จ่ายแล้ว'>จ่ายแล้ว</option>";
        echo"<option value ='ยังไม่จ่าย'>ยังไม่จ่าย</option>";
    }?>

</select></label><br>
<label>รหัสลูกค้า<input type="text" name ="c_id"/></label><br>
<label>รหัสสินค้า<input type="text" name ="p_id"/></label><br>
<label>วันที่ออเดอร์<input type="text" name ="o_date"/></label><br>
<label>ราคาสุทธิ<input type="text" name ="o_total"/></label><br>


<input type="hidden" name="controller" value="orders"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>