<form method = "get" action="">
<label>Status<select name="o_status">
    <?php {
        echo"<option value ='จ่ายแล้ว'>จ่ายแล้ว</option>";
        echo"<option value ='ยังไม่จ่าย'>ยังไม่จ่าย</option>";
    }?>

</select></label><br>




<input type="hidden" name="controller" value="orders"/>
<input type="hidden" name="o_id" value="<?php echo $ordersby->o_id?>"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="update">update</button>

</form>