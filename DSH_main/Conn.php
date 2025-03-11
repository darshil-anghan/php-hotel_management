<?php 
    function connection()
    {
        $servername = "localhost";
        $username="root";
        $password="";
        $database="projectdemo";
        try{

            $conn= new mysqli($servername,$username,$password,$database);
            return $conn;
        }catch(Exception $e){
                echo"Error:".$e->getMessage();
                exit();
        }
                
    }
?>