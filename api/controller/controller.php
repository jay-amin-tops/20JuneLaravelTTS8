<?php
session_start();
include_once("model/model.php");
class Controller extends Model
{
    public $base_url_assets = "http://localhost/laravel/20JuneLaravelTTS8/20JuneLaravelTTS8/MVC-Rev/assets/";
    public function __construct()
    {
        ob_start();
        parent::__construct();
        // echo "called";
        // echo "<pre>";
        // print_r($_SERVER);
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/getallusers':
                    $allUsers = $this->select("users");
                    echo json_encode($allUsers);
                    // echo "<pre>";
                    // print_r($allUsers);
                    break;
                case '/login':
                    $RequestData = json_decode(file_get_contents('php://input')); 
                    // echo "<pre>";
                    // print_r($RequestData);
                    
                    $LoginData = $this->login($RequestData->username,$RequestData->password);
                    echo json_encode($LoginData);
                    break;
                case '/emailvalidataion':
                    // $RequestData = json_decode(file_get_contents('php://input')); 
                    
                    $Data = $this->select('users',array("email"=>$_REQUEST['email']));
                    echo json_encode($Data);
                    break;
                case '/addnewuser':
                    $RequestData = json_decode(file_get_contents('php://input'),true); 
                    // echo "==== requestData====== ";
                    // print_r($RequestData);
                    // unset($RequestData->cpassword);
                    // print_r($RequestData);
                    // $RequestData->gender = "Male";
                    unset($RequestData['cpassword']);
                    $newArray = array_merge($RequestData,array("gender"=>"Male"));
                    // $RequestData->gender = "Male";
                    print_r($newArray);
                    // echo "==== $ _ REQUESTData====== ";
                    // print_r($_REQUEST);
                    $Data = $this->insert('user',$newArray);
                    // echo json_encode($Data);
                    break;
                case '/deleteusers':
                    // $RequestData = json_decode(file_get_contents('php://input')); 
                    // echo "<pre>";
                    // print_r($RequestData);
                    $DeleteData = $this->delete("users",array("id"=>$_REQUEST['userid']));
                    $allUsers = $this->select("users");
                    // print_r($allUsers );
                    echo json_encode($allUsers);
                    break;
                default:
                    # code...
                    break;
            }
        }
    }
}
$Controller = new Controller;
