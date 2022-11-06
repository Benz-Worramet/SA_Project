<?php echo"<br>Are you sure to delete this Customer<br>
            <br> $customer->c_id $customer->c_name $customer->c_tel $customer->c_address $customer->c_email <br>

            "?>
<form method ="get" action = "">
    <input type ="hidden" name="controller" value="customer"/>
    <input type = "hidden" name="c_id" value="<?php echo $customer->c_id;?>"/>
    <button type = "submit" name="action" value="index">back</button>
    <button type = "submit" name="action" value="delete">delete</button>

    
    </form>