<?php
require_once('config.php');

if(isset($_GET)){

    $id = $_GET['id'];

    $sql = "select * from crud where id = $id"; 
    $result = ($conn->query($sql)); 

    if ($result)  
    { 
        $rows = $result->fetch_assoc(); 
        echo json_encode($rows);  
    }  
}else{
    echo "There is no data";
}


mysqli_close($conn);


?>