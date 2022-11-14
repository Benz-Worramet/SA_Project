<form method = "get" action="">


<label>Status<select name="T_status">
    <?php {
        echo"<option value ='กำลังจัดส่ง'>กำลังจัดส่ง</option>";
        echo"<option value ='จัดส่งสำเร็จ'>จัดส่งสำเร็จ</option>";
    }?>

</select></label><br>
<<label>รหัสออเดอร์<select name='b_id'>
        <?php foreach($bill as $list)
        {
            echo"<option value =$list->b_id>$list->b_id</option>";
        }?>
</select></label><br>
<label>วันที่จัดส่ง(YYYY-MM-DD)<input type="date"  name="T_date"></label><br>

<input type="hidden" name="controller" value="tracking"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="add">add</button>

</form>