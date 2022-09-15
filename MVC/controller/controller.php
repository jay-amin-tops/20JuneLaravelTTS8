<?php

class Controller{
    // public $base_url = "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/MVC/";
    public $assets_url = "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/MVC/assets/";
    public function __construct() {
        // echo "called";
        // echo "<pre>";
        // print_r($_SERVER);
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/mainpage.php");
                    include_once("views/footer.php");
                    break;
                case '/contact':
                    include_once("views/subheader.php");
                    echo "Contact us page data";
                    include_once("views/footer.php");
                    break;
                case '/about':
                    include_once("views/subheader.php");
                    echo "About us page data";
                    include_once("views/footer.php");
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
}
$Controller = new Controller;
