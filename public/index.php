<?php 
require_once('../utils/utility.php');

$method = getGet('method');
$controller = null;
switch($method) {
    case 'manager':
        require_once('../controllers/ManagerController.php');
        $controller = new ManagerController();
    break;
    case 'product':
        require_once('../controllers/ProductController.php');
        $controller = new ProductController();
    break;
    case 'customer':
        require_once('../controllers/CustomerController.php');
        $controller = new CustomerController();
    break;
    default:
        require_once('../controllers/IndexController.php');
        $controller = new IndexController();
    break;
}

if($controller != null) {
    $controller->doRequest();
}