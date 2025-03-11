<?php 
include_once 'conn.php';
function search_sign_up($Username)
{
    $conn=connection();
    $sql = "select * from sign_up where Username='$Username'";
    //return mysqli_query($conn, $sql);
    $result=$conn->query($sql);
    $conn->close();
    return $result;
}
?>