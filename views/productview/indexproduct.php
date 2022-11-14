New Product<a href=?controller=product&action=create>Click</a>
<h1 > Product</h1>
<br>
<form method ="get" action="">
       <input type = "text" name="key">
       <input type="hidden" name="controller" value="product"/>
       <button type="submit" name ="action" value ="search">Search</button>
</form>

<table  border = 1>
<tr></tr><td>รหัสสินค้า</td><td>ชื่อสินค้า</td><td>ราคาขาย</td><td>ราคาต้นทุน</td><td>จำนวนสินค้า</td><td>update</td><td>delete</td></tr>
<?php foreach($product as $line)                
{
    echo"<tr><td>$line->p_id</td>
            <td>$line->p_name</td>
            <td>$line->p_price</td>
            <td>$line->p_cost</td>
            <td>$line->p_amount</td>
            <td>
            <a href=?controller=product&action=updateFrom&p_id=$line->p_id
            >update</a>
            </td>
            <td>
            <a href=?controller=product&action=deleteConfirm&p_id=$line->p_id>delete</a>
            </td>    
            </tr>";
}
echo "</table>";

?>
