<?php class trackingModel{
    public $T_id,$b_id,$T_date,$T_status;

    public function __construct($T_id,$b_id,$T_date,$T_status){
        $this->T_id = $T_id;
        $this->b_id = $b_id;
        $this->T_date = $T_date;
        $this->T_status = $T_status;
    }
    public static function getAll(){
        require("connection_connect.php");
        $itemList=[];
        $sql = "select  * from tracking";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc())
        {   
            $T_id = $myRow["T_id"];
            $b_id = $myRow["b_id"];
            $T_date = $myRow["T_date"];
            $T_status = $myRow["T_status"];         
            $itemList[]= new trackingModel($T_id,$b_id,$T_date,$T_status);
            
        }
     
        require("connection_close.php");
        return $itemList;
    }
    public static function addtracking($b_id,$T_date,$T_status){

        require("connection_connect.php");
        $sql = "insert into tracking (b_id,T_date,T_status) VALUES ('$b_id','$T_date','$T_status');";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){

        require("connection_connect.php");
        $sql = "select  T_id,b_id,T_date,T_status
        from tracking where tracking.T_id like '%$key%' or tracking.T_date like '%$key%' ";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $T_id = $myRow["T_id"];
            $b_id = $myRow["b_id"];
            $T_date = $myRow["T_date"];
            $T_status = $myRow["T_status"];         
            $itemList[]= new trackingModel($T_id,$b_id,$T_date,$T_status);    
        }
        require("connection_close.php");
        return $itemList;

    }
    public static function get($T_id)
    {
        require("connection_connect.php");
        $sql = "select  * from tracking where T_id = '$T_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $T_id = $myRow["T_id"];
        $b_id = $myRow["b_id"];
        $T_date = $myRow["T_date"];
        $T_status = $myRow["T_status"];     
     
        require("connection_close.php");
        return new trackingModel($T_id,$b_id,$T_date,$T_status);
    }
    public static function update($T_id,$T_status){
 
        require("connection_connect.php");
        $sql = " update  tracking SET T_status = '$T_status'
                where T_id ='$T_id' "; 
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }
    public static function delete($T_id){
        
        require("connection_connect.php");
        $sql = " delete from tracking
                where T_id = '$T_id' ";
  
        
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>
    