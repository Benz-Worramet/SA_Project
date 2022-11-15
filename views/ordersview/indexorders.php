<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Orders</title>
       </head>
       <body>
              <div class="container">
              New Orders<a href=?controller=orders&action=create>Click</a>
       <h1 > Orders</h1>
       <br>
       <form method ="get" action="">
            <div class="row">
                <div class = "col-5">
                        <div class="input-group mb-3">
                                <input type="text" name="key" class="form-control rounded" placeholder="กรอกรหัสสินค้า" aria-label="Search" aria-describedby="search-addon" />
                                <input type="hidden" name="controller" value="orders">
                                <button type="submit" class="btn btn-outline-primary" name ="action" value ="search">search</button>
                        </div>
                </div>
            </div>
       </form>

       <table border = 1 class="table table-hover">
       <tr></tr><td>รหัสออเดอร์</td><td>รหัสลูกค้า</td><td>รหัสสินค้า</td><td>Status</td><td>วันที่ออเดอร์(ป-ด-ว)</td><td>ราคาสุทธิ</td><td>update</td><td>delete</td></tr>
       <?php foreach($orders as $line)                
       {
       echo"<tr><td>$line->o_id</td>
              <td>$line->c_id</td>
              <td>$line->p_id</td>
              <td>$line->o_status</td>
              <td>$line->o_date</td>
              <td>$line->o_total</td>
              <td>
              <a href=?controller=orders&action=updateFrom&o_id=$line->o_id
              >update</a>
              </td>
              <td>
              <a href=?controller=orders&action=deleteConfirm&o_id=$line->o_id>delete</a>
              </td>    
              </tr>";
       }
       echo "</table>";
       ?>

       </div>
</body>
</html>
