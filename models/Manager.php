<?php
require_once('dbcontext.php');
require_once('../controllers/BaseController.php');

class Manager {
    public $id;
    public $fullname;
    public $email;
    public $age;
    public $sex;
    public $birthday;
    public $address;
    public $password;

    public function processForm() {
        if(!empty($_POST)) {
            $this->id = getPost('id');
            $this->fullname = getPost('fullname');
            $this->email = getPost('email');
            $this->age = getPost('age');
            $this->sex = getPost('sex');
            $this->birthday = getPost('birthday');
            $this->address = getPost('address');
            $this->password = getPost('password');
    
            $this->password = getMD5Pwd($this->password);
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
        $sql = "INSERT INTO manager(fullname, age, sex, birthday, address, email, password) VALUES ('".$this->fullname."', '".$this->age."', '".$this->sex."', '".$this->birthday."', '".$this->address."', '".$this->email."', '".$this->password."')";
        execute($sql);
    }

    public function update() {
        $sql = "UPDATE manager SET fullname = '".$this->fullname."', age = '".$this->age."', address = '".$this->address."', email = '".$this->email."', password = '".$this->password."' WHERE id = '".$this->id."'";
        execute($sql);
    }

    public function delete() {
        $query_first = "DELETE FROM manager WHERE id = '".$this->id."'";
        $query_second = "DELETE FROM product WHERE manager_id = '".$this->id."'";
        $query_third = "DELETE FROM customer WHERE manager_id = '".$this->id."'";
        execute($query_first);
        execute($query_second);
        execute($query_third);
    }
    
    public static function find($id) {
        $sql = "SELECT * FROM manager WHERE id = '$id'";
        $item = executeResult($sql, true);

        $manager = new Manager();
        $manager->id = $item['id'];
        $manager->fullname = $item['fullname'];
        $manager->age = $item['age'];
        $manager->sex = $item['sex'];
        $manager->address = $item['address'];
        $manager->email = $item['email'];
        $manager->password = $item['password'];

        return $manager;
    }

    public function login() {
        session_start();
        $user = validateLogin();

        if(!empty($user)) {
            header('Location: ?method=product');
            die();
        }

        $sql = "SELECT * FROM Manager WHERE email = '".$this->email."' and password = '".$this->password."'";
        $data = executeResult($sql, true);

        if($data != null) {
            $_SESSION['currentUser'] = $data;
            $token = getMD5Pwd($data['email'].time());

            $query = "UPDATE manager SET token = '$token' WHERE id = ".$data['id'];
            execute($query);

            setcookie('token', $token, time() + (365 + 24 + 60 + 60), '/');

            // $data['id'] = getMD5Pwd($data['id']);

            setcookie('id', $data['id'], time() + (365 + 24 + 60 + 60), '/');

            header('Location: ?method=product');
            die();
        }

        // if(count($data) == 1) {
        //     setcookie('id', $data[0]['id'], time() + 24 * 60 * 60, '/');
        //     header('Location: ?method=product');
        //     die();
        // }
        else {
            echo '
            <script>
                alert("Dang Nhap That Bai, vui long kiem tra lai tai khoan va mat khau");
                window.location.assign("?method=manager&action=login");
            </script>';
        }
    }
}
