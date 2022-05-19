<?php
session_start();
require_once('dbcontext.php');
require_once('Manager.php');

class Product {
    public $id;
    public $name;
    public $price;
    public $thumbnail;
    public $description;
    public $date_start;
    public $date_end;
    public $category_id;
    public $manager_id;
    public $created_at;
    public $updated_at;
    public $category;

    public function processForm() {
        if(!empty($_POST)) {
            $this->id = getPost('id');
            $this->name = getPost('name');
            $this->price = getPost('price');
            $this->thumbnail = getPost('thumbnail');
            $this->description = getPost('description');
            $this->date_start = getPost('date_start');
            $this->date_end = getPost('date_end');
            $this->category_id = getPost('category_id');
            $this->manager_id = getPost('manager_id');
        }
    }

    public function save() {
        if($this->id > 0) {
            $this->update();
        }
        else {
            $this->insert();
        }
    }

    public function insert() {
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO product(name, price, thumbnail, description, date_start, date_end, category_id, manager_id, created_at, updated_at) VALUES ('".$this->name."', '".$this->price."', '".$this->thumbnail."', '".$this->description."', '".$this->date_start."', '".$this->date_end."' ,'".$this->category_id."', '".$this->manager_id."', '".$this->created_at."', '".$this->updated_at."')";
        execute($sql);
    }

    public function update() {
        $this->updated_at = date('Y-m-d H:i:s');
        $sql = "UPDATE product SET name = '".$this->name."', price = '".$this->price."', thumbnail = '".$this->thumbnail."', description = '".$this->description."', category_id = '".$this->category_id."', updated_at = '".$this->updated_at."' WHERE id = '".$this->id."'";
        execute($sql);
    }

    public function delete() {
        $sql = "DELETE FROM product WHERE id = '".$this->id."'";
        $query = "DELETE FROM customer WHERE product_id = '".$this->id."'";
        execute($sql);
        execute($query);
    }
    
    public static function findProduct($id) {
        // if(isset($_COOKIE['id'])) {
            $sql = "SELECT * FROM product WHERE id = '$id'";
            $item = executeResult($sql, true);
    
            $product = new Product();
            $product->id = $item['id'];
            $product->name = $item['name'];
            $product->price = $item['price'];
            $product->thumbnail = $item['thumbnail'];
            $product->date_start = $item['date_start'];
            $product->date_end = $item['date_end'];
            $product->description = $item['description'];
            $product->category_id = $item['category_id'];
    
            return $product;
        // }

        // else {
        //     header("Location: ?method=manager&action=login");
        //     die();
        // }
    }

    // public static function findManager($id) {
    //     $sql = "SELECT * FROM manager WHERE id = '$id'";
    //     $item = executeResult($sql, true);

    //     $manager = new Manager();
    //     $manager->id = $item['id'];

    //     return $manager;
    // }

    public static function list() {
        // if(isset($_COOKIE['id'])) {
            $sql = "SELECT product.*, category.name 'category' FROM product LEFT JOIN category ON product.category_id = category.id WHERE manager_id = '".$_COOKIE['id']."'";
            $list = executeResult($sql);
        
            $ProductList = [];
        
            foreach($list as $item) {
                $product = new Product();
                $product->id = $item['id'];
                $product->name = $item['name'];
                $product->price = $item['price'];
                $product->thumbnail = $item['thumbnail'];
                $product->description = $item['description'];
                $product->date_start = $item['date_start'];
                $product->date_end = $item['date_end'];
                $product->category = $item['category'];
                $product->manager_id = $item['manager_id'];
        
                $ProductList[] = $product;
            }
    
            return $ProductList;
        // }

        // else {
        //     header("Location: ?method=manager&action=login");
        //     die();
        // }
    }

    public static function auctions() {
        $sql = "SELECT product.*, category.name 'category' FROM product LEFT JOIN category ON product.category_id = category.id";
        $list = executeResult($sql);

        $ProductList = [];

        foreach($list as $item) {
            $product = new Product();
            $product->id = $item['id'];
            $product->name = $item['name'];
            $product->price = $item['price'];
            $product->thumbnail = $item['thumbnail'];
            $product->description = $item['description'];
            $product->category = $item['category'];
            $product->manager_id = $item['manager_id'];

            $ProductList[] = $product;
        }

        return $ProductList;
    }
}
