<?php
    $Nama_Penonton = $_POST['Nama_Penonton'];
    $Usia_Penonton = $_POST['Usia_Penonton'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    
    //database connection
    $conn = new mysqli('localhost','root','','Bioskop');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into penonton(Nama_Penonton, Usia_Penonton, Jenis_kelamin)
            values(?,?,?)");
            $stmt->bind_param("sis", $Nama_Penonton, $Usia_Penonton, $Jenis_Kelamin);
            $stmt->execute();
            $stmt->close();
            $conn->close();
    }
?>
