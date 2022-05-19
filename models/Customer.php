<?php
require_once('dbcontext.php');
require_once('../controllers/BaseController.php');
require_once('Manager.php');

class Customer {
    public $id;
    public $fullname;
    public $email;
    public $age;
    public $sex;
    public $birthday;
    public $address;
    public $auction_price;
    public $product_id;
    public $manager_id;
    public $date_attend;

    public function processForm() {
        if(!empty($_POST)) {
            $this->id = getPost('id');
            $this->fullname = getPost('fullname');
            $this->email = getPost('email');
            $this->age = getPost('age');
            $this->sex = getPost('sex');
            $this->birthday = getPost('birthday');
            $this->address = getPost('address');
            $this->product_id = getPost('product_id');
            $this->manager_id = getPost('manager_id');
            $this->auction_price = getPost('auction_price');
            $this->message = getPost('message');
    
            // $this->password = getMD5Pwd($this->password);
        }
    }

    public function save() {
        $this->insert();
    }

    public function insert() {
        $this->date_attend = date('Y-m-d H:i:s');
        $sql = "INSERT INTO customer(fullname, email, age, sex, birthday, address, auction_price, message, product_id, manager_id, date_attend) VALUES ('".$this->fullname."', '".$this->email."', '".$this->age."', '".$this->sex."', '".$this->birthday."', '".$this->address."', '".$this->auction_price."', '".$this->message."', '".$this->product_id."', '".$this->manager_id."' ,'".$this->date_attend."')";
        execute($sql);
    }

    // public function update() {
    //     $sql = "UPDATE manager SET fullname = '".$this->fullname."', age = '".$this->age."', address = '".$this->address."', email = '".$this->email."', password = '".$this->password."' WHERE id = '".$this->id."'";
    //     execute($sql);
    // }

    // public function delete() {
    //     $sql = "DELETE FROM manager WHERE id = '".$this->id."'";
    //     execute($sql);
    // }

    public static function showCustomer($product_id) {
        $sql = "SELECT customer.* FROM customer, product WHERE product_id = '$product_id' AND customer.auction_price > product.price OR customer.auction_price = product.price ORDER BY customer.auction_price DESC";
        $list = executeResult($sql);

        $customerList = [];
        foreach($list as $item) {
            $customer = new Customer();
            $customer->fullname = $item['fullname'];
            $customer->email = $item['email'];
            $customer->age = $item['age'];
            $customer->sex = $item['sex'];
            $customer->birthday = $item['birthday'];
            $customer->address = $item['address'];
            $customer->auction_price = $item['auction_price'];

            $customerList[] = $customer;
        }

        return $customerList;
    }
    
    public static function findProduct($id) {
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $item = executeResult($sql, true);

        $product = new Customer();
        $product->id = $item['id'];
        $product->auction_price = $item['price'];
        // $manager->fullname = $item['fullname'];
        // $manager->age = $item['age'];
        // $manager->sex = $item['sex'];
        // $manager->address = $item['address'];
        // $manager->email = $item['email'];
        // $manager->password = $item['password'];

        return $product;
    }

    public static function findManager($id) {
        $sql = "SELECT * FROM manager WHERE id = '$id'";
        $item = executeResult($sql, true);

        $manager = new Manager();
        $manager->id = $item['id'];

        return $manager;
    }

    // public function login() {
    //     $sql = "SELECT * FROM Manager WHERE email = '".$this->email."' and password = '".$this->password."'";
    //     $data = executeResult($sql);

    //     if(count($data) == 1) {
    //         BaseController::redirect('method=product');
    //     }
    //     else {
    //         echo '
    //         <script>
    //             alert("Dang Nhap That Bai, vui long kiem tra lai tai khoan va mat khau");
    //             window.location.assign("?method=manager&action=login");
    //         </script>';
    //     }
    // }
}