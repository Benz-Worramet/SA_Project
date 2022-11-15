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
       New Bill<a href=?controller=bill&action=create>Click</a>
       <h1 > Bill</h1>
       <br>
       <form method ="get" action="">
            <div class="row">
                <div class = "col-5">
                        <div class="input-group mb-3">
                                <input type="text" name="key" class="form-control rounded" placeholder="กรอกรหัสสินค้า" aria-label="Search" aria-describedby="search-addon" />
                                <input type="hidden" name="controller" value="bill">
                                <button type="submit" class="btn btn-outline-primary" name ="action" value ="search">search</button>
                        </div>
                </div>
            </div>
       </form>

       <table border = 1 class="table table-hover">
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

       </div>
</body>
</html>
