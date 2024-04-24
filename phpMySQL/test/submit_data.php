<?php
$username="root";
$password="";
$database="test_xyz";
$host="localhost";

$conn = new mysqli($host,$username,$password,$database);
if($conn->connection_error){
    echo "db not connected";
}

if(isset($_POST['submit_button'])){
    $data = $_POST['data'];

    $sql = "INSERT INTO test_table (data) values ('$data')";

    if($conn->query($sql)===TRUE){
        echo "database updated";

    }else{
        echo "error";
    }
}
$conn->close();
?>