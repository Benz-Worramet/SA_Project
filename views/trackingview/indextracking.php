<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       <div class="container">
              New Tracking<a href=?controller=tracking&action=create>Click</a>
              <h1 > Tracking</h1>
              <br>
              <form method ="get" action="">
                     <div class="row">
                            <div class = "col-5">
                                   <div class="input-group mb-3">
                                          <input type="text" name="key" class="form-control rounded" placeholder="กรอกรหัสสินค้า" aria-label="Search" aria-describedby="search-addon" />
                                          <input type="hidden" name="controller" value="tracking">
                                          <button type="submit" class="btn btn-outline-primary" name ="action" value ="search">search</button>
                                   </div>
                            </div>
                     </div>
              </form>

              <table  border = 1 class="table table-hover">
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
       </div>
</body>
</html>

