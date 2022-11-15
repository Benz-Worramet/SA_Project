<?php class ordersModel{
    public $o_id,$c_id,$p_id,$o_status,$o_date,$o_total;

    public function __construct($o_id,$c_id,$p_id,$o_status,$o_date,$o_total){
        $this->o_id = $o_id;
        $this->c_id = $c_id;
        $this->p_id = $p_id;
        $this->o_status = $o_status;
        $this->o_date = $o_date;
        $this->o_total = $o_total;
    }
    public static function getAll(){
        require("connection_connect.php");
        $itemList=[];
        $sql = "select  o_id,c_id,p_id,o_status,o_date,o_total from orders";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc())
        {   
            $o_id = $myRow["o_id"];
            $c_id = $myRow["c_id"];
            $p_id = $myRow["p_id"];
            $o_status = $myRow["o_status"];         
            $o_date =  $myRow["o_date"] ;
            $o_total =  $myRow["o_total"] ;
            $itemList[]= new ordersModel($o_id,$c_id,$p_id,$o_status,$o_date,$o_total);
            
        }
        
        require("connection_close.php");
        return $itemList;
    }
    public static function addorders($c_id,$p_id,$o_status,$o_date,$o_total){

        require("connection_connect.php");
       
        $sql = "insert into orders (c_id,p_id,o_status,o_date,o_total) VALUES ('$c_id','$p_id','$o_status','$o_date','$o_total');";

        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){

        require("connection_connect.php");
        $sql = "select  o_id,c_id,p_id,o_status,o_date,o_total
        from orders where orders.o_status like '%$key%' or orders.o_id like '%$key%' ";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $o_id = $myRow["o_id"];
            $c_id = $myRow["c_id"];
            $p_id = $myRow["p_id"];
            $o_status = $myRow["o_status"];         
            $o_date =  $myRow["o_date"] ;
            $o_total =  $myRow["o_total"] ;
            $itemList[] = new ordersModel($o_id,$c_id,$p_id,$o_status,$o_date,$o_total);       
        }
        require("connection_close.php");
        return $itemList;

    }
    public static function get($o_id)
    {
        require("connection_connect.php");
        $sql = "select  o_id,c_id,p_id,o_status,o_date,o_total from orders where o_id = '$o_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $o_id = $myRow["o_id"];
        $c_id = $myRow["c_id"];
        $p_id = $myRow["p_id"];
        $o_status = $myRow["o_status"];         
        $o_date =  $myRow["o_date"] ;
        $o_total =  $myRow["o_total"] ;
        
     
        require("connection_close.php");
        return new ordersModel($o_id,$c_id,$p_id,$o_status,$o_date,$o_total);
    }
    public static function update($o_id,$o_status){
 
        require("connection_connect.php");
        $sql = " update  orders SET o_status = '$o_status'
                where o_id ='$o_id' "; 
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }

    public static function delete($o_id){
 
        require("connection_connect.php");
        $sql = " delete from orders
                where o_id = '$o_id' ";


        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
    
}

   
?>