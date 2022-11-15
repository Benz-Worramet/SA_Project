<?php class billModel{
    public $b_id,$o_id,$b_date;

    public function __construct($b_id,$o_id,$b_date){
        $this->b_id = $b_id;
        $this->o_id = $o_id;
        $this->b_date = $b_date;
    }
    public static function getAll(){
        require("connection_connect.php");
        $itemList=[];
        $sql = "select  b_id,o_id,b_date from bill";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc())
        {   
            $b_id = $myRow["b_id"];  
            $o_id =  $myRow["o_id"] ;
            $b_date =  $myRow["b_date"] ;
            $itemList[]= new billModel($b_id,$o_id,$b_date);
            
        }
        
        require("connection_close.php");
        return $itemList;
    }
    public static function addbill($o_id,$b_date){
        require("connection_connect.php");
        $sql = "insert into bill (o_id,b_date) VALUES ('$o_id','$b_date');";
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        require("connection_connect.php");  
        $sql = "select  b_id,o_id,b_date
        from bill where bill.b_id like '%$key%' or bill.b_date like '%$key%' ";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $b_id = $myRow["b_id"];  
            $o_id =  $myRow["o_id"] ;
            $b_date =  $myRow["b_date"] ;
            $itemList[]= new billModel($b_id,$o_id,$b_date);
                 
        }
        require("connection_close.php");
        return $itemList;

    }
    public static function get($b_id)
    {
        require("connection_connect.php");
        $sql = "select  b_id,o_id,b_date from bill where b_id = '$b_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $b_id = $myRow["b_id"];  
        $o_id =  $myRow["o_id"] ;
        $b_date =  $myRow["b_date"] ;
     
        require("connection_close.php");
        return new billModel($b_id,$o_id,$b_date);
    }

    public static function delete($b_id){
        require("connection_connect.php");
        $sql = " delete from bill
                where b_id = '$b_id' ";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>