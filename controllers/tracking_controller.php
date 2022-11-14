<?php class trackingController {
    public function index(){
        $tracking = trackingModel::getAll();

        require_once('views/trackingview/indextracking.php');
       
    }
    public function create(){
        $tracking = trackingModel::getAll();
        $bill = billModel::getAll();

        require_once('views/trackingview/create.php');
       
    }
    public function search(){
        $key = $_GET['key'];
        $tracking = trackingModel::search($key);
        require_once('views/trackingview/indextracking.php');
       
    }

    public function add(){


        $b_id = $_GET['b_id'];
        $T_date = $_GET['T_date'];
        $T_status = $_GET['T_status'];
        trackingModel::addtracking($b_id,$T_date,$T_status);
        trackingController::index();
    }
    public function update(){
        $T_id = $_GET['T_id'];
        $T_status = $_GET['T_status'];
        trackingModel::update($T_id,$T_status);
        trackingController::index();
    }
    public function updateFrom(){
        $T_id = $_GET['T_id'];
        $tracking = trackingModel::getAll();
        $trackingby = trackingModel::get($T_id);

        require_once('views/trackingview/update.php');
       
    }

   public function deleteConfirm(){
                    $T_id = $_GET['T_id'];
                    $tracking = trackingModel::get($T_id);
                    echo $tracking->T_id;
                    require_once('views/trackingview/deleteConfirm.php');
        
    }
    public function delete(){
        $T_id = $_GET['T_id'];
        trackingModel::delete($T_id);
        trackingController::index();
 


}
    public function error(){
        require_once('views/pages/error.php');
    }
}
?>