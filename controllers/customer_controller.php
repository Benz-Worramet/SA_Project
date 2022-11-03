<?php class customerController {
    public function index(){
        $customer = customerModel::getAll();

        require_once('views/Customerview/indexcustomer.php');
       
    }
    public function create(){
        $customer = customerModel::getAll();
        //$itemColor = itemColorModel::getAll();
        //$item  = Item::getAll();
  
        require_once('views/Customerview/create.php');
       
    }
    public function search(){
        $key = $_GET['key'];
        $customer = customerModel::search($key);
        require_once('views/Customerview/indexcustomer.php');
       
    }

    public function add(){


        $c_name = $_GET['c_name'];
        $c_tel = $_GET['c_tel'];
        $c_address = $_GET['c_address'];
        $c_email = $_GET['c_email'];
        customerModel::addCustomer($c_name,$c_tel,$c_address,$c_email);
        echo"===================3=================";
        customerController::index();
    }

   public function deleteConfirm(){
                    $c_id = $_GET['c_id'];
                    $customer = customerModel::get($c_id);
                    echo $customer->c_id;
                    require_once('views/Customerview/deleteConfirm.php');
        
    }
    public function delete(){
        $c_id = $_GET['c_id'];
        customerModel::delete($c_id);
        customerController::index();
 


}
    public function error(){
        require_once('views/pages/error.php');
    }
}
?>