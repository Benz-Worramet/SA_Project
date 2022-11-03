<?php  
    $controllers = array('pages'=>['home','error'],'customer' => ['index','delete','deleteConfirm','search','create','add'],'product' => ['index','delete','deleteConfirm','search','create','add','update'],'orders' => ['index','delete','deleteConfirm','search','create','add']);

    function call($controller,$action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages":       $controller = new PagesController(); break;
            case "customer":  require_once("models/customerModel.php");
                                $controller = new customerController();break;
            case "product":     require_once("models/productModel.php");
                                $controller = new productController(); break;
            case "orders":     require_once("models/ordersModel.php");
                                $controller = new ordersController(); break;
        }
        $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers)){
        echo"sdfsdfsdfsdf";

        if(in_array($action,$controllers[$controller])){

            call($controller,$action);
        }
        else{
            call('pages','error');
        }
    }
    else{
        call('pages','error');
    }
?>