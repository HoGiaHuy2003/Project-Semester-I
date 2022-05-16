<?php 
require_once('BaseController.php');
require_once('../models/Manager.php');

class ManagerController extends BaseController {
    public function add() {
        $this->view('manager/add.php');
    }

    public function edit() {
        $id = getGet('id');
        $manager = Manager::find($id);

        $this->view('manager/edit.php', [
            'manager' => $manager
        ]);
    }

    public function post() {
        $manager = new Manager();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=manager&action=login');
    }

    public function delete() {
        $id = getGet('id');
        $manager = Manager::find($id);

        $this->view('manager/delete.php', [
            'manager' => $manager
        ]);
    }

    public function confirmDelete() {
        $id = getPost('id');
        $manager = new Manager();
        $manager->id = $id;
        $manager->delete();

        $this->redirect('method=manager');
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