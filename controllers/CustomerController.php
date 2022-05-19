<?php 
require_once('BaseController.php');
require_once('../models/Customer.php');

class CustomerController extends BaseController {
    public function add() {
            $product_id = getGet('product_id');
            $manager_id = getGet('id');
            $manager = Customer::findManager($manager_id);
            $product = Customer::findProduct($product_id);
            $this->view('customer/index.php', [
                'manager' => $manager,
                'product' => $product
            ]);
    }

    public function customer() {
        if(isset($_COOKIE['id'])) {
            $id = getGet('id');
            $customerList = Customer::showCustomer($id);
            $index = 0;

            $this->view('customer/customer.php', [
                'customerList' => $customerList,
                'index' => $index
            ]);
        } else {
            $this->redirect('method=manager&action=login');
        }
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