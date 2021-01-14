<?php
class Database{
    private $con;

    public function __construct(){
        $this->con=mysqli_connect("localhost","root","","hotel");
    }
    
    public function doquery($statement){
        return mysqli_query($this->con,$statement);
    }
}