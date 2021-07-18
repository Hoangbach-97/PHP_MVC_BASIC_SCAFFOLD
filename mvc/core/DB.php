<?php 

class DB{
public $con;
public $host= "localhost";
public $servername = "root";
public $password= "";
public $dbname= "mvc1";
public function __construct() {
  $this->con = mysqli_connect($this->host, $this->servername, $this->password,$this->dbname);
//    $result =mysqli_select_db($this->con, );
    // mysqli_query($this->con, "SET NAMES 'utf8'");
    if($this->con)
    {
        echo "Connect successfully";
    }
  
}

}




?>