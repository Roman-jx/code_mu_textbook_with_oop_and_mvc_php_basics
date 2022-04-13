<?php
// Task 1
namespace Project;
use \Resourse\Controller\Page as UserPage;
use \Resourse\Controller\Page as AdminPage;

class Test{
    public function __construct(){
        $page = new UserPage();
        $page2 = new AdminPage();
    }
}

namespace Project\Date;
use Controller\Page as Page1;
use Controller\Page as Page2;
class Test{
    public function __construct(){
        $pageC = new Page1;
        $pageM = new Page2;
    }
}