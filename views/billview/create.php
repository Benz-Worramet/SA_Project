<form method = "get" action="">

<label>รหัสออเดอร์<select name='o_id'>
        <?php foreach($order as $list)
        {
            echo"<option value =$list->o_id>$list->o_id</option>";
        }?>
</select></label><br>
<label>วันที่บิล<input type="date"  name="b_date"/></label><br>

<input type="hidden" name="controller" value="bill"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>