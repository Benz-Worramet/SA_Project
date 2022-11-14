<?php  
    $controllers = array('pages'=>['home','error'],
    'customer' => ['index','delete','deleteConfirm','search','create','add'],
    'product' => ['index','delete','deleteConfirm','search','create','add','update','updateFrom'],
    'orders' => ['index','delete','deleteConfirm','search','create','add','update','updateFrom'],
    'bill' => ['index','delete','deleteConfirm','search','create','add'],
    'tracking' => ['index','delete','deleteConfirm','search','create','add','update','updateFrom']);

    function call($controller,$action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages":       $controller = new PagesController(); break;
            case "customer":  require_once("models/customerModel.php");
                                $controller = new customerController();break;
            case "product":     require_once("models/productModel.php");
                                $controller = new productController();
                                 break;
            case "orders":     require_once("models/ordersModel.php");
                                require_once("models/customerModel.php");
                                require_once("models/productModel.php");
                                $controller = new ordersController(); break;
            case "bill":     require_once("models/billModel.php");
                              require_once("models/ordersModel.php");
                                $controller = new billController(); break;
            case "tracking":     require_once("models/trackingModel.php");
                                 require_once("models/billModel.php");
                                $controller = new trackingController(); break;                                         
        }
        $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers)){
        echo"ระบบสั่งซื้ออุปกรณ์เกี่ยวกับกำเนิดไฟฟ้าของ บริษัท อินโนวาเร่ จำกัด";

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