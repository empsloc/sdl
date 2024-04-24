<?php
$username="root";
$password="";
$host="localhost";
$db="test_xyz";

$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){
    die("connection failed");
}

$sql = "SELECT * FROM test_table";
$result = $conn->query($sql);

if($result->num_rows>0){

    while($row = $result->fetch_assoc()){
        
        echo  $row["data"]."<a href = 'delete_data.php?data=".$row["data"]."'>Delete</a>"."</br>";
    
    }

}

$conn->close();


?>