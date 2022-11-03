<?php class productModel{
    public $p_id,$p_name,$p_price,$p_cost,$p_status;

    public function __construct($p_id,$p_name,$p_price,$p_cost,$p_status){
        $this->p_id = $p_id;
        $this->p_name = $p_name;
        $this->p_price = $p_price;
        $this->p_cost = $p_cost;
        $this->p_status = $p_status;
    }
    public static function getAll(){
        require("connection_connect.php");
        $itemList=[];
        $sql = "select  * from product";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc())
        {   
            $p_id = $myRow["p_id"];
            $p_name = $myRow["p_name"];
            $p_price = $myRow["p_price"];
            $p_cost = $myRow["p_cost"];         
            $p_status =  $myRow["p_status"] ;
            $itemList[]= new productModel($p_id,$p_name,$p_price,$p_cost,$p_status);
            
        }
        
        require("connection_close.php");
        return $itemList;
    }
    public static function addproduct($p_name,$p_price,$p_cost,$p_status){
        echo"$p_name,$p_price,$p_cost,$p_status";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = "insert into product (p_name,p_price,p_cost,p_status) VALUES ('$p_name','$p_price','$p_cost','$p_status');";
        echo "==============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        echo $key;
        require("connection_connect.php");
        $sql = "select  *
        from product where product.p_id like '%$key%' ";
        echo "=======111==";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $p_id = $myRow["p_id"];
            $p_name = $myRow["p_name"];
            $p_price = $myRow["p_price"];
            $p_cost = $myRow["p_cost"];         
            $p_status =  $myRow["p_status"] ;
            $itemList[]= new productModel($p_id,$p_name,$p_price,$p_cost,$p_status);       
        }
        require("connection_close.php");
        return $itemList;

    }
    public static function get($p_id)
    {
        require("connection_connect.php");
        $sql = "select  * from product where p_id = '$p_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $p_id = $myRow["p_id"];
        $p_name = $myRow["p_name"];
        $p_price = $myRow["p_price"];
        $p_cost = $myRow["p_cost"];         
        $p_status =  $myRow["p_status"] ;
        
     
        require("connection_close.php");
        return new productModel($p_id,$p_name,$p_price,$p_cost,$p_status);
    }
    public static function update($p_id,$p_name,$p_price,$p_cost,$p_status){
        echo"$p_name,$p_price,$p_cost,$p_status";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = " update  product SET p_name = '$p_name',p_price = '$p_price',p_cost ='$p_cost,p_price = '$p_status'
                where p_id ='$p_id' ";
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }
    public static function delete($p_id){
        echo"$p_id";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = " delete from product
                where p_id = '$p_id' ";
        echo $p_id;
        echo "===============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>