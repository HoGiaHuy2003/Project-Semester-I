<?php
require_once('BaseController.php');
class IndexController extends BaseController {
    public function doRequest() {
        $this->show();
    }

    public function show() {
        $this->view('../views/home/project/header/homepage.php');
    }
}