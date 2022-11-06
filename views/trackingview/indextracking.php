New Tracking<a href=?controller=tracking&action=create>Click</a>
<h1 > Tracking</h1>
<br>
<form method ="get" action="">
       <input type = "text" name="key">
       <input type="hidden" name="controller" value="tracking"/>
       <button type="submit" name ="action" value ="search">Search</button>
</form>

<table  border = 1>
<tr></tr><td>รหัสจัดส่ง</td><td>รหัสบิล</td><td>วันที่จัดส่ง(ป-ด-ว)</td><td>Status</td><td>update</td><td>delete</td></tr>
<?php foreach($tracking as $line)                
{
    echo"<tr><td>$line->T_id</td>
            <td>$line->b_id</td>
            <td>$line->T_date</td>
            <td>$line->T_status</td>
            <td>
            <a href=?controller=tracking&action=updateFrom&T_id=$line->T_id
            >update</a>
            </td>
            <td>
            <a href=?controller=tracking&action=deleteConfirm&T_id=$line->T_id>delete</a>
            </td>    
            </tr>";
}
echo "</table>";

?>
