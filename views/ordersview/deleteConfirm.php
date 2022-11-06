<?php echo"<br>Are you sure to delete this Orders<br>
            <br> $orders->o_id $orders->c_id $orders->p_id $orders->o_status $orders->o_total  <br>

            "?>
<form method ="get" action = "">
    <input type ="hidden" name="controller" value="orders"/>
    <input type = "hidden" name="o_id" value="<?php echo $orders->o_id;?>"/>
    <button type = "submit" name="action" value="index">back</button>
    <button type = "submit" name="action" value="delete">delete</button>

    
    </form>