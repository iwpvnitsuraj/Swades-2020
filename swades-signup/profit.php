<?php
session_start();
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
    $welcomeMessage = "Welcome!";
} else {
    header('Location: login_auth.php');
}
?>
<html lang="en">

<head>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

</head>
<?php include("head.php");?>

<body id= "main">


<!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Team Profit</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
<table class="table" id="myTable">
    <thead>
    <tr>
        <th>SR.NO.</th>
        <th>UNIQUE_ID</th>
        <th>TEAMNAME</th>
		<th>PROFIT</th>
    </tr>
    </thead>

    <tbody>
    <?php

    $conn=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");
    $result=mysqli_query($conn, "SELECT * FROM profit");

    while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['SR.NO.'];?></td>
            <td><?php echo $row['UNIQUE_ID'];?></td>
            <td><?php echo $row['TEAMNAME'];?></td>
			<td><?php echo $row['PROFIT'];?></td>
        </tr>




        <?php
    endwhile;
    ?>
    </tbody>
</table>


<!-- this is old code an be used later -->
<!--
echo '<table id="myTable" cellpadding="0" cellspacing="0" class="db-table">';
echo "<tr><th>ID_NO</th><th>NAME</th><th>ROLL_NO</th><th>BRANCH</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VNIT";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ID_NO, NAME,ROLL_NO,BRANCH FROM mytable");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> -->


<!-- DataTables -->
<script src="tables/jquery.js"></script>
<script src="tables/jquery.dataTables.js"></script>
<script src="tables/dataTables.bootstrap.js"></script>

<script language="javascript">
    $(document).ready(function(){
        $('#myTable').dataTable();
    });
</script>

</body>
</html>
