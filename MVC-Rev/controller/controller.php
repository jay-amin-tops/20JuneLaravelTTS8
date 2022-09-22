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
                    if (isset( $_POST['save'] )) {
                        // echo "<pre>";
                        // print_r($_POST);
                        $HobbiesData = implode(',',$_POST['hob']); 
                        $data = array("username"=>$_POST['username'],
                        "password"=>$_POST['password'],
                        "gender"=>$_POST['gender'],
                        "mobile"=>$_POST['mobile'],
                        "hobby"=>$HobbiesData,
                        "email"=>$_POST['email']);
                        // $RegistrationResponse = $this->insert("users",array("username"=>"test","password"=>"456","gender"=>"Male","email"=>"mymail@mail.com"));
                        $RegistrationResponse = $this->insert("users",$data);
                        // $RegistrationResponse = $this->insert("city",array("city_title"=>"test"));
                    }
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