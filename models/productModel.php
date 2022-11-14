<?php class productModel{
    public $p_id,$p_name,$p_price,$p_cost,$p_amount;

    public function __construct($p_id,$p_name,$p_price,$p_cost,$p_amount){
        $this->p_id = $p_id;
        $this->p_name = $p_name;
        $this->p_price = $p_price;
        $this->p_cost = $p_cost;
        $this->p_amount = $p_amount;
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
            $p_amount =  $myRow["p_amount"] ;
            $itemList[]= new productModel($p_id,$p_name,$p_price,$p_cost,$p_amount);
            
        }

        require("connection_close.php");
        return $itemList;
    }
    public static function addproduct($p_name,$p_price,$p_cost,$p_amount){
        require("connection_connect.php");
        $sql = "insert into product (p_name,p_price,p_cost,p_amount) VALUES ('$p_name','$p_price','$p_cost','$p_amount');";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        require("connection_connect.php");
        $sql = "select  *
        from product where product.p_id like '%$key%' ";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $p_id = $myRow["p_id"];
            $p_name = $myRow["p_name"];
            $p_price = $myRow["p_price"];
            $p_cost = $myRow["p_cost"];         
            $p_amount =  $myRow["p_amount"] ;
            $itemList[]= new productModel($p_id,$p_name,$p_price,$p_cost,$p_amount);       
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
        $p_amount =  $myRow["p_amount"] ;
        
     
        require("connection_close.php");
        return new productModel($p_id,$p_name,$p_price,$p_cost,$p_amount);
    }
    public static function update($p_id,$p_price,$p_amount){
        require("connection_connect.php");
        $sql = " update  product SET p_price = '$p_price',p_amount = '$p_amount'
                where p_id ='$p_id' "; 
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }
    public static function delete($p_id){

        require("connection_connect.php");

        $sql = " delete from product
                where p_id = '$p_id' ";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>