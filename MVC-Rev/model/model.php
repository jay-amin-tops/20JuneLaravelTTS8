<?php
// error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
class Model{
    public $DbConnection = "";
    public function __construct() {
        try {
            $this->DbConnection = new mysqli("localhost1","root","","masterdatabase");
        } catch (\Exception $e) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $Msg =PHP_EOL."Error Date Time =>> ". date("d-m-Y h:i:s A").PHP_EOL;
            $Msg .="Error Msg =>> ". $e->getMessage().PHP_EOL;
            // echo $Msg;
            $fileName = "log/ErrorLog".date("d_m_Y").".txt";
            file_put_contents($fileName,$Msg,FILE_APPEND);
            echo "Error in database connection try after some time";
        }
        echo "<pre>";
        print_r($this->DbConnection);    
    }
}
