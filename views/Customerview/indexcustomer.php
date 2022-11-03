new itemdetail<a href=?controller=customer&action=create>Click</a>
<h1 > Customer</h1>
<br>
<form method ="get" action="">
       <input type = "text" name="key">
       <input type="hidden" name="controller" value="customer"/>
       <button type="submit" name ="action" value ="search">Search</button>
</form>

<table  border = 1>
<tr></tr><td>รหัสลูกค้า</td><td>ชื่อ-นามสกุล</td><td>เบอร์ติดต่อ</td><td>ที่อยู่</td><td>อีเมลล์</td></tr>
<?php foreach($customer as $line)                
{
    echo"<tr><td>$line->c_id</td>
            <td>$line->c_name</td>
            <td>$line->c_tel</td>
            <td>$line->c_address</td>
            <td>$line->c_email</td>
            <td>
            <a href=?controller=customer&action=deleteConfirm&c_id=$line->c_id>delete</a>
            </td>    
            </tr>";
}
echo "</table>";

?>



