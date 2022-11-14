<form method = "get" action="">

<label>Status<select name="o_status">
    <?php {
        echo"<option value ='จ่ายแล้ว'>จ่ายแล้ว</option>";
        echo"<option value ='ยังไม่จ่าย'>ยังไม่จ่าย</option>";
    }?>
</select></label><br>
<label>รหัสลูกค้า<select name='c_id'>
        <?php foreach($customer as $list)
        {
            echo"<option value =$list->c_id>$list->c_name</option>";
        }?>
</select></label><br>
<label>รหัสสินค้า<select name='p_id'>
        <?php foreach($product as $list)
        {
            echo"<option value =$list->p_id>$list->p_name</option>";
        }?>
</select></label><br>
<label>วันที่ออเดอร์(YYYY-MM-DD)<input type="date" id="birthday" name="o_date"/></label><br>
<label>ราคาสุทธิ<input type="text" name ="o_total"/></label><br>


<input type="hidden" name="controller" value="orders"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>