<?php

class Controller{
    public function __construct() {
        // echo "called controller";
        // echo "<pre>";
        // print_r($_SERVER);
        // print_r($_SERVER['PATH_INFO']);
        switch ($_SERVER['PATH_INFO']) {
            case '/home':
                include_once("views/main_page.php");
                include_once("views/footer.php");
                // echo "HOme page";
                break;
            case '/about':
                include_once("views/subpagesheader.php");
                include_once("views/about.php");
                include_once("views/footer.php");
                break;
            case '/contact':
                include_once("views/subpagesheader.php");
                include_once("views/contact.php");
                include_once("views/footer.php");
                break;
            
            default:
                # code...
                break;
        }
    }
}
$Controller = new Controller;
?>