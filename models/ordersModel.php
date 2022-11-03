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
        $sql = "select  * from orders";
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
        echo"======2======";
        echo"$c_id,$p_id,$o_status,$o_date,$o_total";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        //$sql = "select  * from line_Detail natural join ItemColor natural join Item;"
        $sql = "insert into orders (c_id,p_id,o_status,o_date,o_total) VALUES ('$c_id','$p_id','$o_status','$o_date','$o_total');";
        echo "==============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        echo $key;
        require("connection_connect.php");
        $sql = "select  *
        from orders where orders.o_id like '%$key%' ";
        echo "=======111==";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
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
    public static function get($o_id)
    {
        require("connection_connect.php");
        $sql = "select  * from orders where o_id = '$o_id' ";
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

    public static function delete($o_id){
        echo"$o_id";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = " delete from orders
                where o_id = '$o_id' ";
        echo $o_id;
        echo "===============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>