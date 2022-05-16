<?php 
require_once('BaseController.php');
require_once('../models/Product.php');

class ProductController extends BaseController {
    public function add() {
        $sql = "SELECT * FROM category";
        $category = executeResult($sql);
        $this->view('product/add.php', [
            'category' => $category
        ]);
    }

    public function edit() {
        $id = getGet('id');
        $product = product::find_product($id);
        $sql = "SELECT * FROM category";
        $category = executeResult($sql);

        $this->view('product/edit.php', [
            'product' => $product,
            'category' => $category
        ]);
    }

    public function post() {
        $manager = new product();
        $manager->processForm();
        $manager->save();

        $this->redirect('method=product&action=index');
    }

    public function delete() {
        $id = getGet('id');
        $product = product::find_product($id);
        $sql = "SELECT * FROM category";
        $category = executeResult($sql);

        $this->view('product/delete.php', [
            'product' => $product,
            'category' => $category
        ]);
    }

    public function confirmDelete() {
        $id = getPost('id');
        $product = new product();
        $product->id = $id;
        $product->delete();

        $this->redirect('method=product');
    }

    public function index() {
        $productList = Product::list();
        $index = 0;

        $this->view('product/index.php', [
            'productList' => $productList,
            'index' => $index
        ]);
    }
}