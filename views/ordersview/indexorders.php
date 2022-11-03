new itemdetail<a href=?controller=orders&action=create>Click</a>
<h1 > Orders</h1>
<br>
<form method ="get" action="">
       <input type = "text" name="key">
       <input type="hidden" name="controller" value="orders"/>
       <button type="submit" name ="action" value ="search">Search</button>
</form>

<table  border = 1>
<tr></tr><td>o_id</td><td>c_id</td><td>p_id</td><td>o_status</td><td>o_date</td><td>o_total</td><td>delete</td></tr>
<?php foreach($orders as $line)                
{
    echo"<tr><td>$line->o_id</td>
            <td>$line->c_id</td>
            <td>$line->p_id</td>
            <td>$line->o_status</td>
            <td>$line->o_date</td>
            <td>$line->o_total</td>
            <td>
            <a href=?controller=orders&action=deleteConfirm&o_id=$line->o_id>delete</a>
            </td>    
            </tr>";
}
echo "</table>";

?>
