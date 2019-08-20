<?php
# connection oriented
class DB{
    public function connect(){
        $connectionResource=mysqli_connect("localhost","root","");
        mysqli_select_db($connectionResource,"userinfo");
        if(!$connectionResource)
        {
            die("connection failed".mysqli_connect_error());
        } 
        else
        echo "Connection Successful";
        return $connectionResource;
    }
    function __constructor(){
    }
}

?>