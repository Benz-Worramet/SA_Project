<?php class ordersController {
    public function index(){
        $orders = ordersModel::getAll();

        require_once('views/ordersview/indexorders.php');
       
    }
    public function create(){
        $orders = ordersModel::getAll();
        //$itemColor = itemColorModel::getAll();
        //$item  = Item::getAll();
  
        require_once('views/ordersview/create.php');
       
    }
    public function search(){
        $key = $_GET['key'];
        $orders = ordersModel::search($key);
        require_once('views/ordersview/indexorders.php');
       
    }

    public function add(){
        // $color_name = $_GET['colorName'];
        // $item_name = $_GET['itemName'];
        // $item_id = $_GET['itemid'];

        $c_id = $_GET['c_id'];
        $p_id = $_GET['p_id'];
        $o_status = $_GET['o_status'];
        $o_date = $_GET['o_date'];
        $o_total = $_GET['o_total'];
        ordersModel::addorders($c_id,$p_id,$o_status,$o_date,$o_total);
        echo"===================3=================";
        ordersController::index();
    }

   public function deleteConfirm(){
                    $o_id = $_GET['o_id'];
                    $orders = ordersModel::get($o_id);
                    echo $orders->o_id;
                    require_once('views/ordersview/deleteConfirm.php');
        
    }
    public function delete(){
        $o_id = $_GET['o_id'];
        ordersModel::delete($o_id);
        ordersController::index();
 


}
    public function error(){
        require_once('views/pages/error.php');
    }
}
?>