<?php
include_once("model/model.php");
class Controller extends Model{
    public function __construct() {
        parent::__construct();
        // echo "called controller";
        // echo "<pre>";
        // print_r($_SERVER);
        // print_r($_SERVER['PATH_INFO']);
        if (isset($_SERVER['PATH_INFO'])){
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
                case '/registration':
                    include_once("views/subpagesheader.php");
                    include_once("views/signup.php");
                    include_once("views/footer.php");
                    echo "<pre>";
                    print_r($_POST);
                    break;
                
                default:
                    include_once("views/subpagesheader.php");
                    include_once("views/templatepage.php");
                    include_once("views/footer.php");
                    break;
            }
        } else{
            header("location:home");
            // echo "invalid uri";
        }
    }
}
$Controller = new Controller;
?>