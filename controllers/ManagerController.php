<?php 
require_once('BaseController.php');
require_once('../models/Manager.php');

class ManagerController extends BaseController {
    public function add() {
        $this->view('manager/add.php');
    }

    public function edit() {
        if(isset($_COOKIE['id'])) {
            $id = $_COOKIE['id'];
            $manager = Manager::find($id);
    
            $this->view('manager/edit.php', [
                'manager' => $manager
            ]);
        }

        else {
            $this->redirect('method=manager&action=login');
        }
    }

    public function post() {
        $manager = new Manager();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=manager&action=login');
    }

    public function confirmEdit() {
        $manager = new Manager();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=product');
    }

    public function delete() {
        if(isset($_COOKIE['id'])) {
            $id = $_COOKIE['id'];
            $manager = Manager::find($id);
    
            $this->view('manager/delete.php', [
                'manager' => $manager
            ]);
        }

        else {
            $this->redirect('method=manager&action=login');
        }
    }

    public function confirmDelete() {
        $id = getPost('id');
        $manager = new Manager();
        $manager->id = $id;
        $manager->delete();

        setcookie('id', $manager->id, time(), '/');

        $this->redirect('');
    }

    public function login() {
        $this->view('manager/login.php');
    }

    public function confirmLogin() {
        $manager = new Manager();
        $manager->processForm();
        $manager->login();
    }
}