<form method = "get" action="">


<label>Status<select name="T_status">
    <?php {
        echo"<option value ='กำลังจัดส่ง'>กำลังจัดส่ง</option>";
        echo"<option value ='จัดส่งสำเร็จ'>จัดส่งสำเร็จ</option>";
    }?>

</select></label><br>
<label>รหัสบิล<input type="text" name ="b_id"/></label><br>
<label>วันที่จัดส่ง(YYYY-MM-DD)<input type="text" name ="T_date"/></label><br>

<input type="hidden" name="controller" value="tracking"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>