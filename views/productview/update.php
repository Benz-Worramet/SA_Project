<form method = "get" action="">
<label>Status<select name="p_status">
    <?php {
        echo"<option value ='ว่าง'>ว่าง</option>";
        echo"<option value ='เบิก'>เบิก</option>";
    }?>

<input type="hidden" name="controller" value="lineDetail"/>
<button type = "submit" name="action" value="index">back</button>
<button type = "submit" name="action" value="update">add</button>

</form>