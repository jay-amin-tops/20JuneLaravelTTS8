<?php
session_start();
include_once("model/model.php");
class Controller extends Model
{
    public $base_url_assets = "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/MVC-Rev/assets/";
    public function __construct()
    {
        parent::__construct();
        // echo "called controller";
        // echo "<pre>";
        // print_r($_SERVER);
        // print_r($_SERVER['PATH_INFO']);
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("views/main_page.php");
                    include_once("views/footer.php");
                    // echo "HOme page";
                    if (isset($_POST['login'])) {
                        $loginRes = $this->login($_POST['uname'],$_POST['password']);
                        // echo "<pre>";
                        // print_r($loginRes);
                        if ($loginRes['Code'] == 1) {
                            $_SESSION['UserData'] = $loginRes['Data']; 
                            if ($loginRes['Data']->role_id == 1) {
                                // header("location:admindashboard");?>
                                <script>
                                    alert("Login Success ");
                                    window.location.href="admindashboard";
                                </script>
                            <?php } else {
                                // header("location:home");?>
                                <script>
                                    alert("Login Success ");
                                    window.location.href="home";
                                </script>
                            <?php
                            }
                            
                        } else {
                        
                        }
                        
                    }
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
                case '/logout':
                    session_destroy();
                    header("location:home");
                    break;
                case '/registration':
                    include_once("views/subpagesheader.php");
                    include_once("views/signup.php");
                    include_once("views/footer.php");
                    if (isset($_POST['save'])) {
                        // echo "<pre>";
                        // print_r($_POST['hob']);
                        $HobbiesData = implode(',',$_POST['hob']); 
                        $data = array(
                            "username" => $_POST['username'],
                            "password" => $_POST['password'],
                            "gender" => $_POST['gender'],
                            "email" => $_POST['email'],
                            "mobile" => $_POST['mobile'],
                            "hobby" => $HobbiesData,
                        );
                        $RegistrationResponse = $this->insert("users", $data);
                        if ($RegistrationResponse['Code'] == 1) {
                            // header("location:home"); ?>
                            <script>
                                alert("Registration Success ");
                                window.location.href="home";
                            </script>
                        <?php }else{
                            echo "<script>alert('Error while inserting try after some time')</script>";

                        }
                    }
                    // if (isset( $_POST['save'] )) {
                    //     // echo "<pre>";
                    //     // print_r($_POST);
                    //     $HobbiesData = implode(',',$_POST['hob']); 
                    //     $data = array("username"=>$_POST['username'],
                    //     "password"=>$_POST['password'],
                    //     "gender"=>$_POST['gender'],
                    //     "mobile"=>$_POST['mobile'],
                    //     "hobby"=>$HobbiesData,
                    //     "email"=>$_POST['email']);
                    //     // $RegistrationResponse = $this->insert("users",array("username"=>"test","password"=>"456","gender"=>"Male","email"=>"mymail@mail.com"));
                    //     $RegistrationResponse = $this->insert("users",$data);
                    //     // $RegistrationResponse = $this->insert("city",array("city_title"=>"test"));
                    // }
                    break;

                case "/admindashboard":
                    include_once("views/admin/header.php");
                    include_once("views/admin/dashboard.php");
                    include_once("views/admin/footer.php");
                    break;
                case "/allusers":
                    $AllUsersData = $this->select("users",array("role_id"=>2,"status"=>1));
                    // $AllUsersData = $this->select("users");
                    include_once("views/admin/header.php");
                    include_once("views/admin/allusers.php");
                    include_once("views/admin/footer.php");
                    break;
                case "/edituser":
                    $UsersDataById = $this->select("users",array("id"=>$_GET['userid']));
                    $allCitiesData = $this->select("cities_data");
                    // echo "<pre>";
                    // print_r($AllUsersData);
                    // exit;
                    // $AllUsersData = $this->select("users");
                    include_once("views/admin/header.php");
                    include_once("views/admin/edituser.php");
                    include_once("views/admin/footer.php");

                    if (isset($_POST['Update'])) {
                        if ($_FILES['prof_pic']['error'] == 0) {
                            $ImageOrignalName = $_FILES['prof_pic']['name'];
                            $ext = pathinfo($ImageOrignalName, PATHINFO_EXTENSION);
                            $ImageName = "shopping".time().".".$ext;
                            move_uploaded_file($_FILES['prof_pic']['tmp_name'],"uploads/$ImageName");
                        }else{
                            $ImageName= "default.jpg";
                        }
                        echo $ImageName;
                    }
                    break;
                default:
                    include_once("views/subpagesheader.php");
                    include_once("views/templatepage.php");
                    include_once("views/footer.php");
                    break;
            }
        } else {
            header("location:home");
            // echo "invalid uri";
        }
    }
}
$Controller = new Controller;
