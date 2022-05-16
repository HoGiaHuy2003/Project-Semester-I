<?php 
require_once('BaseController.php');
require_once('../models/Customer.php');

class CustomerController extends BaseController {
    public function add() {
        $id = getGet('id');
        $customer = Customer::find($id);
        $this->view('customer/index.php', [
            'customer' => $customer
        ]);
    }

    // public function edit() {
    //     $id = getGet('id');
    //     $manager = Manager::find($id);

    //     $this->view('manager/edit.php', [
    //         'manager' => $manager
    //     ]);
    // }

    public function post() {
        $manager = new Customer();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=customer&action=confirm');
    }

    public function confirm() {
        $this->view('customer/confirm.php');
    }

    // public function delete() {
    //     $id = getGet('id');
    //     $manager = Manager::find($id);

    //     $this->view('manager/delete.php', [
    //         'manager' => $manager
    //     ]);
    // }

    // public function confirmDelete() {
    //     $id = getPost('id');
    //     $manager = new Manager();
    //     $manager->id = $id;
    //     $manager->delete();

    //     $this->redirect('method=manager');
    // }

    // public function login() {
    //     $this->view('manager/login.php');
    // }

    // public function confirmLogin() {
    //     $manager = new Manager();
    //     $manager->processForm();
    //     $manager->login();
    // }
}