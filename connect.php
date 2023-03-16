<?php

$dataB = $_POST['dataB'];
$emriBankes = $_POST['emriBankes'];
$vlera = $_POST['vlera'];



$conn = new mysqli('localhost','root','','bankcalc');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
    else{
        $stmt = $conn->prepare("insert into banka(dataB, emriBankes, vlera)
        values (?, ?, ?)");
        $stmt->bind_param("sss", $dataB, $emriBankes, $vlera);
        $stmt->execute();
    echo "successfully";
        $stmt->close();
    $conn->close();

    }



?>