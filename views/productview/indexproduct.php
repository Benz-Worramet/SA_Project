<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Product</title>
</head>
<body>
       <div class="container">
       New Product<a href=?controller=product&action=create>Click</a>
       <h1> Product</h1>
       <br>

       <form method ="get" action="">
            <div class="row">
                <div class = "col-5">
                        <div class="input-group mb-3">
                                <input type="text" name="key" class="form-control rounded" placeholder="กรอกรหัสสินค้า" aria-label="Search" aria-describedby="search-addon" />
                                <input type="hidden" name="controller" value="product">
                                <button type="submit" class="btn btn-outline-primary" name ="action" value ="search">search</button>
                        </div>
                </div>
            </div>
       </form>

       <table border = 1 class="table table-hover">
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


       </div>
</body>
</html>