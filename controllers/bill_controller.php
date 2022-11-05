<?php class billController {
    public function index(){
        $bill = billModel::getAll();

        require_once('views/billview/indexbill.php');
       
    }
    public function create(){
        $bill = billModel::getAll();
        //$itemColor = itemColorModel::getAll();
        //$item  = Item::getAll();
  
        require_once('views/billview/create.php');
       
    }
    public function search(){
        $key = $_GET['key'];
        $bill = billModel::search($key);
        require_once('views/billview/indexbill.php');
       
    }

    public function add(){

        $o_id = $_GET['o_id'];
        $b_date = $_GET['b_date'];
        billModel::addbill($o_id,$b_date);
        echo"===================3=================";
        billController::index();
    }

   public function deleteConfirm(){
                    $b_id = $_GET['b_id'];
                    $bill = billModel::get($b_id);
                    echo $bill->b_id;
                    require_once('views/billview/deleteConfirm.php');
        
    }
    public function delete(){
        $b_id = $_GET['b_id'];
        billModel::delete($b_id);
        billController::index();
 


}
    public function error(){
        require_once('views/pages/error.php');
    }
}
?>