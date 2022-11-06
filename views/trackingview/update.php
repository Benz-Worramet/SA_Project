<form method = "get" action="">
<label>Status<select name="T_status">
    <?php {
        echo"<option value ='กำลังจัดส่ง'>กำลังจัดส่ง</option>";
        echo"<option value ='จัดส่งสำเร็จ'>จัดส่งสำเร็จ</option>";
    }?>

</select></label><br>




<input type="hidden" name="controller" value="tracking"/>
<input type="hidden" name="T_id" value="<?php echo $trackingby->T_id?>"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="update">update</button>

</form>