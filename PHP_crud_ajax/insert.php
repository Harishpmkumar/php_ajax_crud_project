<?php
require_once('config.php');

if(isset($_POST)){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (email, password)
    VALUES ('$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
    echo "There is no data";
}


mysqli_close($conn);


?>