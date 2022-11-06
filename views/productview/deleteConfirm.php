<?php echo"<br>Are you sure to delete this Product <br>
            <br> $product->p_id $product->p_name $product->p_price $product->p_cost $product->p_status <br>

            "?>
<form method ="get" action = "">
    <input type ="hidden" name="controller" value="product"/>
    <input type = "hidden" name="p_id" value="<?php echo $product->p_id;?>"/>
    <button type = "submit" name="action" value="index">back</button>
    <button type = "submit" name="action" value="delete">delete</button>

    
    </form>