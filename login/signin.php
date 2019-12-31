<?php 
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database="eval1";

          
          $conn = new mysqli($servername, $username, $password,$database);
          if ($conn->connect_error)
          {
                    die("Connection failed: " . $conn->connect_error);
          } 
          $sql = "INSERT INTO customer_details( `username`, `gender`, `phone`, `password`,`email`) 
          VALUES ('$_POST[name]', '$_POST[gender]', '$_POST[phone]', '$_POST[password]', '$_POST[email]')";
        
        if ($conn->query($sql) === TRUE) {
          header("Location: newdexsuccess.php"); 
        
        } else {
          header("Location: newdexfailure.php"); 
        }



    $conn->close();
?>