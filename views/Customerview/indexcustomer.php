<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Customer</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
       <div class="container">

       New Customer<a href=?controller=customer&action=create>Click</a>
       <h1 > Customer</h1>
       <br>
       <form method ="get" action="">
            <div class="row">
                <div class = "col-5">
                        <div class="input-group mb-3">
                                <input type="text" name="key" class="form-control rounded" placeholder="กรอกเบอร์โทรลูกค้า" aria-label="Search" aria-describedby="search-addon" />
                                <input type="hidden" name="controller" value="customer">
                                <button type="submit" class="btn btn-outline-primary" name ="action" value ="search">search</button>
                        </div>
                </div>
            </div>
       </form>
       <table border = 1 class="table table-hover">
       <tr></tr><td>รหัสลูกค้า</td><td>ชื่อ-นามสกุล</td><td>เบอร์ติดต่อ</td><td>ที่อยู่</td><td>อีเมลล์</td><td>delete</td></tr>
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

       </div>
       
</body>
</html>



