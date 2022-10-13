<?php
// error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
class Model{
    public $DbConnection = "";
    public function __construct() {
        try {
            $this->DbConnection = new mysqli("localhost","root","","masterdatabase");
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
        // echo "<pre>";
        // print_r($this->DbConnection);    
    }
    public function insert($tbl,$insertData){
        // echo "<pre>";
        // print_r($insertData);
        // Converting array keys to string for columns START
        $clms =implode(",",array_keys($insertData));
        // Converting array keys to string for columns END
        // Converting array values to string for value START
        $vals =implode("','",$insertData);
        // Converting array values to string for value START
        // print_r($clms);
        // echo "</pre>";
        // echo "INSERT INTO users(username,password,gender,email)VALUES('test','123','Male','mail@mail.com')";
        // echo "<br>";
        // Dynamic Insert Query START
        $Query = "INSERT INTO $tbl($clms)VALUES('$vals')";
        // die;
        // exit;
        // Dynamic Insert Query END
        // every query must be executed on database 
        $QueryEx = $this->DbConnection->query($Query);
        if ($QueryEx > 0) {
            $ResponseData['Data'] = 1;
            $ResponseData['Code'] = 1;
            $ResponseData['Msg'] = "Success";
        } else {
            $ResponseData['Data'] = 0;
            $ResponseData['Code'] = 0;
            $ResponseData['Msg'] = "Error while inserting";
        }
        return $ResponseData;
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
    }
    public function login($uname,$pass){
        $Query = "SELECT * FROM users WHERE username='$uname' AND password= '$pass'";
        $QueryEx = $this->DbConnection->query($Query);
        // echo "<pre>";
        // print_r($QueryEx);
        if ($QueryEx->num_rows > 0) {
            // $FetchData = $QueryEx->fetch_all();
            // echo "<pre>";
            // print_r($FetchData);
            // $FetchData = $QueryEx->fetch_array();
            // echo "<pre>";
            // print_r($FetchData);
            // $FetchData = $QueryEx->fetch_row();
            // echo "<pre>";
            // print_r($FetchData);
            // $FetchData = $QueryEx->fetch_field();
            // echo "<pre>";
            // print_r($FetchData);
            while ($data = $QueryEx->fetch_object()) {
                $FetchData[]=$data;
            }
            $ResponseData['Data'] = $FetchData[0];
            $ResponseData['Code'] = 1;
            $ResponseData['Msg'] = "Success";
        } else {
            $ResponseData['Data'] = 0;
            $ResponseData['Code'] = 0;
            $ResponseData['Msg'] = "Error while inserting";
        }
        return $ResponseData;
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
    }
    public function select($tbl,$where=""){
        $Query = "SELECT * FROM $tbl";
        if ($where != "") {
            $Query .= " WHERE";
            foreach ($where as $key => $value) {
                $Query .= " $key = '$value' AND";
            }
            $Query = rtrim($Query,"AND");
        }
        // echo  $Query;
        $QueryEx = $this->DbConnection->query($Query);
        if ($QueryEx->num_rows > 0) {
            while ($data = $QueryEx->fetch_object()) {
                $FetchData[]=$data;
            }
            $ResponseData['Data'] = $FetchData;
            $ResponseData['Code'] = 1;
            $ResponseData['Msg'] = "Success";
        } else {
            $ResponseData['Data'] = 0;
            $ResponseData['Code'] = 0;
            $ResponseData['Msg'] = "Error while inserting";
        }
        return $ResponseData;
    }
    public function update($tbl,$data,$where=""){
        $Query = "UPDATE $tbl SET";
        foreach ($data as $ukey => $uvalue) {
            $Query .= " $ukey = '$uvalue' ,";
        }
        $Query = rtrim($Query,",");
        if ($where != "") {
            $Query .= " WHERE";
            foreach ($where as $key => $value) {
                $Query .= " $key = '$value' AND";
            }
            $Query = rtrim($Query,"AND");
        }
        // echo  $Query;
        // exit;
        $QueryEx = $this->DbConnection->query($Query);
        if ($QueryEx > 0) {
            $ResponseData['Data'] = 1;
            $ResponseData['Code'] = 1;
            $ResponseData['Msg'] = "Success";
        } else {
            $ResponseData['Data'] = 0;
            $ResponseData['Code'] = 0;
            $ResponseData['Msg'] = "Error while inserting";
        }
        return $ResponseData;
    }
}
