<?php
// Start the session
session_start();
$SIZE = $_SESSION['SIZE'];

?>



<?php



    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="swades";

    $NAME="";
    $COLLEGE="";
    $CONTACT="";
    $EMAIL="";

    $UNIQUE="";
    $PREFIX="S20";
    //$teamsize=$SIZE;
    
    //connect to mysql database
    
      $conn = new mysqli($servername, $username, $password, $dbname);
   $zone=$_POST['zone'];
      $password=$_POST['password'];
      $TEAMNAME=$_POST['teamname'];
      
    $sql1 = "INSERT INTO team (username,password,zone)
VALUES ('$TEAMNAME','$password','$zone')";
if ($conn->query($sql1) === TRUE) {
   header("location: success.php");
} else {
header("location: failure.php");
}

    if (isset($_POST["submit"])){
        $UNIQUE=uniqid($PREFIX);
        $TEAMNAME=$_POST['teamname'];
        foreach ($_POST['name'] as $index => $name) {
            $data1 = mysqli_real_escape_string($conn,$name);
            $data2 = mysqli_real_escape_string($conn,$_POST['college'][$index]);
            $data3 = mysqli_real_escape_string($conn,$_POST['contact'][$index]);
            $data4 = mysqli_real_escape_string($conn,$_POST['email'][$index]);
            mysqli_query($conn, "INSERT INTO teamsize (UNIQUE_ID ,TEAMNAME,NAME, COLLEGE, CONTACT, EMAIL,ZONE) VALUES ('$UNIQUE','$TEAMNAME','$data1', '$data2', '$data3', '$data4','$zone')") or die(mysqli_error($conn));
        }
    }
    $TEAMNAME=$_POST['teamname'];
     
 
$conn->close();

?>

