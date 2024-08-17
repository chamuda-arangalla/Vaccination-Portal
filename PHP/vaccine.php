<?php 
    require 'config.php';


    $vplace = $_POST['vaccinel'];
    $vtype = $_POST['vaccinet'];
   

    $sql = "INSERT INTO vaccine (vacPlace,vacType) VALUES ('$vplace','$vtype')";
    
    if($conn->query($sql)){
        echo "<script>alert('Reservation is Successeful')</script>";
    }
    else{
        echo "Error";
    }

?>


