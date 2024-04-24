<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_xyz";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("d");
}
if(isset($_GET['data'])){
    $data = $_GET['data'];

    $sql= "DELETE FROM test_table WHERE data='$data'";

    if($conn->query($sql)===TRUE){
        header("Location: view_data.php");
        exit();
    }

}
$conn->close();
?>