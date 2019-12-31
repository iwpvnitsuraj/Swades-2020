<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swades";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
include('session.php');


$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];
$answer4=$_POST['answer4'];
$answer5=$_POST['answer5'];
$answer6=$_POST['answer6'];
$answer7=$_POST['answer7'];
$answer8=$_POST['answer8'];
$des1=$_POST['des1'];
$des2=$_POST['des2'];
$team_name= $login_session;

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO answers (team_name,answer1,answer2,answer3,answer4,answer5,answer6,answer7,answer8,des1,des2)
VALUES ('$team_name' , '$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$des1','$des2')";
if ($conn->query($sql) === TRUE) {
header("location: rec.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

