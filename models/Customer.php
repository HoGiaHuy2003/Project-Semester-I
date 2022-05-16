<?php
require_once('dbcontext.php');
require_once('../controllers/BaseController.php');

class Customer {
    public $id;
    public $fullname;
    public $email;
    public $age;
    public $sex;
    public $birthday;
    public $address;
    public $product_id;
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
    
            // $this->password = getMD5Pwd($this->password);
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
        $this->date_attend = date('Y-m-d H:i:s');
        $sql = "INSERT INTO customer(fullname, age, sex, birthday, address, email, product_id, date_attend) VALUES ('".$this->fullname."', '".$this->age."', '".$this->sex."', '".$this->birthday."', '".$this->address."', '".$this->email."', '".$this->product_id."', '".$this->date_attend."')";
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
    
    public static function find($id) {
        $sql = "SELECT * FROM product WHERE id = '$id'";
        $item = executeResult($sql, true);

        $customer = new Customer();
        $customer->id = $item['id'];
        // $manager->fullname = $item['fullname'];
        // $manager->age = $item['age'];
        // $manager->sex = $item['sex'];
        // $manager->address = $item['address'];
        // $manager->email = $item['email'];
        // $manager->password = $item['password'];

        return $customer;
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