<?php class productController {
    public function index(){
        $product = productModel::getAll();

        require_once('views/productview/indexproduct.php');
       
    }
    public function create(){
        $product = productModel::getAll();

  
        require_once('views/productview/create.php');
       
    }
    public function search(){
        $key = $_GET['key'];
        $product = productModel::search($key);
        require_once('views/productview/indexproduct.php');
       
    }

    public function add(){


        $p_name = $_GET['p_name'];
        $p_price = $_GET['p_price'];
        $p_cost = $_GET['p_cost'];
        $p_status = $_GET['p_status'];
        productModel::addproduct($p_name,$p_price,$p_cost,$p_status);

        productController::index();
    }
    public function update(){
        $p_id = $_GET['p_id'];
        $p_price = $_GET['p_price'];
        $p_status = $_GET['p_status'];
        productModel::update($p_id,$p_price,$p_status);
        productController::index();
    }
    public function updateFrom(){

        $p_id = $_GET['p_id'];
        $product = productModel::getAll();
        $productby = productModel::get($p_id);

        require_once('views/productview/update.php');
       
    }

   public function deleteConfirm(){
                    $p_id = $_GET['p_id'];
                    $product = productModel::get($p_id);
                    echo $product->p_id;
                    require_once('views/productview/deleteConfirm.php');
        
    }
    public function delete(){
        $p_id = $_GET['p_id'];
        productModel::delete($p_id);
        productController::index();
 


}
    public function error(){
        require_once('views/pages/error.php');
    }
}
?>