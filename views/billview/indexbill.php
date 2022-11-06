New Bill<a href=?controller=bill&action=create>Click</a>
<h1 > Bill</h1>
<br>
<form method ="get" action="">
       <input type = "text" name="key">
       <input type="hidden" name="controller" value="bill"/>
       <button type="submit" name ="action" value ="search">Search</button>
</form>

<table  border = 1>
<tr></tr><td>รหัสบิล</td><td>รหัสออเดอร์</td><td>วันที่บิล(ป-ด-ว)</td><td>delete</td></tr>
<?php foreach($bill as $line)                
{
    echo"<tr><td>$line->b_id</td>
            <td>$line->o_id</td>
            <td>$line->b_date</td>
            <td>
            <a href=?controller=bill&action=deleteConfirm&b_id=$line->b_id>delete</a>
            </td>    
            </tr>";
}
echo "</table>";

?>
