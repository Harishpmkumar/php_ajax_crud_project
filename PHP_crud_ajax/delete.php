<?php
require_once('config.php');

if(isset($_GET)){

    $id = $_GET['id'];

    $sql = "DELETE FROM crud WHERE id = $id"; 
    $result = ($conn->query($sql)); 

    if ($result)  
    { 
        echo "Deleted successfully";  
    }  
}else{
    echo "There is no data";
}


mysqli_close($conn);


?>