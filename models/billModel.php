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
        $sql = "select  * from bill";
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
        echo"======2======";
        echo"$o_id,$b_date";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        //$sql = "select  * from line_Detail natural join ItemColor natural join Item;"
        $sql = "insert into bill (o_id,b_date) VALUES ('$o_id','$b_date');";
        
        echo "==============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        echo $key;
        require("connection_connect.php");
        $sql = "select  *
        from bill where bill.b_id like '%$key%' ";
        echo "=======111==";
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
        $sql = "select  * from bill where b_id = '$b_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $b_id = $myRow["b_id"];  
        $o_id =  $myRow["o_id"] ;
        $b_date =  $myRow["b_date"] ;
     
        require("connection_close.php");
        return new billModel($b_id,$o_id,$b_date);
    }

    public static function delete($b_id){
        echo"$b_id";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = " delete from bill
                where b_id = '$b_id' ";
        echo $b_id;
        echo "===============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>