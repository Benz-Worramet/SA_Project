<form method = "get" action="">
<label>Status<select name="p_status">
    <?php {
        echo"<option value ='ว่าง'>ว่าง</option>";
        echo"<option value ='เบิก'>เบิก</option>";
    }?>

</select></label><br>

<label>ราคาที่จะขาย<input type="text" name ="p_price"
value="<?php echo $productby->p_price?>"/>
</label><br>
    


<input type="hidden" name="controller" value="product"/>
<input type="hidden" name="p_id" value="<?php echo $productby->p_id?>"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="update">update</button>

</form>