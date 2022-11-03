<?php class customerModel{
    public $c_id,$c_name,$c_tel,$c_address,$c_email;

    public function __construct($c_id,$c_name,$c_tel,$c_address,$c_email){
        $this->c_id = $c_id;
        $this->c_name = $c_name;
        $this->c_tel = $c_tel;
        $this->c_address = $c_address;
        $this->c_email = $c_email;
    }
    public static function getAll(){
        require("connection_connect.php");
        $itemList=[];
        $sql = "select  * from customer";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc())
        {   
            $c_id = $myRow["c_id"];
            $c_name = $myRow["c_name"];
            $c_tel = $myRow["c_tel"];
            $c_address = $myRow["c_address"];         
            $c_email =  $myRow["c_email"] ;
            $itemList[]= new customerModel($c_id,$c_name,$c_tel,$c_address,$c_email);
            
        }
        
        require("connection_close.php");
        return $itemList;
    }
    public static function addCustomer($c_name,$c_tel,$c_address,$c_email){
        echo"$c_name,$c_tel,$c_address,$c_email";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = "insert into customer (c_name,c_tel,c_address,c_email) VALUES ('$c_name','$c_tel','$c_address','$c_email');";
        echo "==============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }
    public static function search($key){
        echo $key;
        require("connection_connect.php");
        $sql = "select  *
        from customer where customer.c_tel like '%$key%' ";
        echo "=======111==";
        $result = $conn->query($sql);
        while($myRow = $result->fetch_assoc()){
            $c_id = $myRow["c_id"];
            $c_name = $myRow["c_name"];
            $c_tel = $myRow["c_tel"];
            $c_address = $myRow["c_address"];         
            $c_email =  $myRow["c_email"] ;
            $itemList[]= new customerModel($c_id,$c_name,$c_tel,$c_address,$c_email);
        }
        require("connection_close.php");
        return $itemList;

    }
    public static function get($c_id)
    {
        require("connection_connect.php");
        $sql = "select  * from customer where c_id = '$c_id' ";
        $result = $conn->query($sql);
        $myRow = $result->fetch_assoc();
        $c_id = $myRow["c_id"];
        $c_name = $myRow["c_name"];
        $c_tel = $myRow["c_tel"];
        $c_address = $myRow["c_address"];
        $c_email =  $myRow["c_email"] ;
  
      
        require("connection_close.php");
        return new customerModel($c_id,$c_name,$c_tel,$c_address,$c_email);
    }

    public static function delete($c_id){
        echo"$c_id";
        echo"=========";
        require("connection_connect.php");
        echo "==============1================";
        $sql = " delete from customer
                where c_id = '$c_id' ";
        echo $c_id;
        echo "===============2================";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }
}
   
?>