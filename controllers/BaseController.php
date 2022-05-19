<?php
class BaseController {
    public function doRequest() {
        $action = getGet('action');

        switch($action) {
            case 'add': 
                $this->add();
            break;
            case 'post': 
                $this->post();
            break;
            case 'edit': 
                $this->edit();
            break;
            case 'confirm-edit':
                $this->confirmEdit();
            break;
            case 'delete': 
                $this->delete();
            break;
            case 'confirm-delete': 
                $this->confirmDelete();
            break;
            case 'login': 
                $this->login();
            break;
            case 'confirm-login':
                $this->confirmLogin(); 
            break;
            case 'confirm':
                $this->confirm();
            break; 
            case 'show':
                $this->show();
            break;
            case 'showCustomer':
                $this->customer();
            break;
            case '':
            case 'index': 
                $this->index();
            break;
            default:
                $this->doAction($action);
            break;
        }
    }
    public function add() {}
    public function index() {}
    public function post() {}
    public function edit() {}
    public function delete() {}
    public function confirmDelete() {}
    public function doAction($action) {}
    public function login() {}
    public function confirmLogin() {}
    public function show() {}
    public function confirmEdit() {}

    public function view($path, $arr = []) {
        foreach($arr as $key => $val) {
            $$key = $val;
        }

        include_once('../views/'.$path);
    }

    public static function redirect($routeName) {
        header('Location: ?'.$routeName);
        die();
    }
}