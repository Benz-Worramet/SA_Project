<?php echo"<br>Are you sersure to delete this Bill<br>
    

            "?>
<form method ="get" action = "">
    <input type ="hidden" name="controller" value="bill"/>
    <input type = "hidden" name="b_id" value="<?php echo $bill->b_id;?>"/>
    <button type = "submit" name="action" value="index">back</button>
    <button type = "submit" name="action" value="delete">delete</button>

    
    </form>