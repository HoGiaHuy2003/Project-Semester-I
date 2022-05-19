<?php 
require_once('BaseController.php');
require_once('../models/Product.php');

class ProductController extends BaseController {
    public function add() {
        if(isset($_COOKIE['id'])) {
            $sql = "SELECT * FROM category";
            $category = executeResult($sql);
            $this->view('product/add.php', [
                'category' => $category
            ]);
        } else {
            $this->redirect('method=manager&action=login');
        }
    }

    public function edit() {
        if(isset($_COOKIE['id'])) {
            $id = getGet('id');
            $product = product::findProduct($id);
            $sql = "SELECT * FROM category";
            $category = executeResult($sql);
    
            $this->view('product/edit.php', [
                'product' => $product,
                'category' => $category
            ]);
        } else {
            $this->redirect('method=manager&action=login');
        }
    }

    public function post() {
        $manager = new product();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=product&action=index');
    }

    public function delete() {
        if(isset($_COOKIE['id'])) {
            $id = getGet('id');
            $product = product::findProduct($id);
            $sql = "SELECT * FROM category";
            $category = executeResult($sql);
    
            $this->view('product/delete.php', [
                'product' => $product,
                'category' => $category
            ]);
        } else {
            $this->redirect('method=manager&action=login');
        }

    }

    public function confirmDelete() {
        $id = getPost('id');
        $product = new product();
        $product->id = $id;
        $product->delete();

        $this->redirect('method=product');
    }

    public function index() {
        if(isset($_COOKIE['id'])) {
            $productList = Product::list();
            $index = 0;
        
            $this->view('product/index.php', [
                'productList' => $productList,
                'index' => $index
            ]);
        }

        else {
            $this->redirect('method=manager&action=login');
        }
    }

    public function show() {
        $productList = Product::auctions();
        $index = 0;

        $this->view('product/show.php', [
            'productList' => $productList,
            'index' => $index
        ]);
    }
}