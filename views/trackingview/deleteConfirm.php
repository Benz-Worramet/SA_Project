<?php echo"<br>Are you sure to delete this Traking<br>
            <br> $tracking->T_id $tracking->b_id $tracking->T_date $tracking->T_status  <br>

            "?>
<form method ="get" action = "">
    <input type ="hidden" name="controller" value="tracking"/>
    <input type = "hidden" name="T_id" value="<?php echo $tracking->T_id;?>"/>
    <button type = "submit" name="action" value="index">back</button>
    <button type = "submit" name="action" value="delete">delete</button>

    
    </form>