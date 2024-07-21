<?php
   $Name = $_POST['Name'];
   $Phone = $_POST['Phone'];
   $Email = $_POST['Email'];
   $Subject = $_POST['Subject'];
   $Message = $_POST['Message'];

   //Database connection
   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
   }else{
        $stmt = $conn->prepare("insert into registration(Name, Phone, Email, Subject, Message)
            values(?, ?, ?, ?, ?)");
        $stml->bind_param("sssssi",$Name, $Phone, $Email, $Subject, $Message);
        $stml->execute();
        echo "registration SUccessfully...";
        $stmt->close();
        $stmt->close();
    }
?>