<?php
require_once('config.php');

if(isset($_POST)){
   
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET email = '$email', password = '$password' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
    echo "There is no data";
}


mysqli_close($conn);


?>