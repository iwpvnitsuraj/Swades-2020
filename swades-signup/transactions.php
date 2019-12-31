<?php
    $filename=basename(__FILE__, '.php');
    $name=basename(__FILE__);
    $con=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");
    if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {


        if (isset($_POST['details'])) {
            $details = $_POST['details'];
        }

        if (isset($_POST['inflow'])) {
            $inflow = $_POST['inflow'];
        }
        if (isset($_POST['outflow'])) {
            $outflow = $_POST['outflow'];
        }

        //Storing values in database
        $con = mysqli_connect("localhost:3306", "jugaad", "VNIT@123", "Jugaad18");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $query = mysqli_query($con, "INSERT into $filename (DETAILS, INFLOW, OUTFLOW ) values('$details','$inflow','$outflow')");
        if ($query) {
            echo '<h3 style="text-align: center"><span id="success">Form Submitted Successfully</span></h3>';
            header('Location: '.$name);
        }
        else {
            echo("Error description: " . mysqli_error($con));
            echo '<h3><span>Form Submission Failed</span></h3>';
        }

    //   $sqlprofit ="UPDATE profit SET PROFIT='$PROFIT' WHERE id='$name'";

    //     if (mysqli_query($con, $sqlprofit)) {
    //         echo "Record updated successfully";
    //     } else {
    //         echo "Error updating record: " . mysqli_error($con);
    //     }

        mysqli_close($con);

    }

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!--<link rel="stylesheet" href="transactions.css">-->
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="css/transactions.css">-->
        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <?php include("head.php"); ?>
    <!-- End Head -->

    <!-- Body -->
    <body id="main">

        <?php include("header.php"); ?>

        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Transaction Details</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <div class="container" id="mainpage" style="background:#f5f5f5; padding:40px 20px;">
                <div style="text-align:center; background:#fff; padding:40px;" >
                <?php
                     $sql = "SELECT SUM(inflow) AS total_inflow FROM $filename";
                     $result = $con->query($sql);

                     if ($result->num_rows > 0) {
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             $inflow =$row['total_inflow'];
                             echo "<p style='text-align:center'>Total inflow  is : " . $row["total_inflow"]."</p>";
                         }
                     } else {
                         echo "<p style='text-align:center'>Total inflow  is : 0</p>";
                     }

                     $sql = "SELECT SUM(outflow) AS total_outflow FROM $filename";

                     $result = $con->query($sql);

                     if ($result->num_rows > 0) {
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             $outflow =$row['total_outflow'];
                             echo nl2br("\nTotal outflow  is : " . $row["total_outflow"]);
                         }
                     } else {
                         echo "<p style='text-align:center'>Total outflow  is : 0</p>";
                     }

                     $PROFIT= $inflow - $outflow;
                     echo nl2br("\nAccount Balance : $PROFIT");
                 	$query=mysqli_query($con," UPDATE profit
                              SET PROFIT = '$PROFIT'
                          WHERE UNIQUE_ID = '$filename'");



                ?>
                </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div class="row" style="padding-top:40px;">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h5 style="text-align:center;">MAKE A ENTRY</h5>
                        <br>
                        <div class="form-group">
                           <input type="text" class="form-control s-form-v2__input g-radius--50" name="details" placeholder="Details" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control s-form-v2__input g-radius--50"  name="inflow"  placeholder="inflow" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control s-form-v2__input g-radius--50"  name="outflow"  placeholder="outflow" required>
                        </div>
                        <div style="margin-top:40px; text-align:center;">
                            <button type="submit" value="submit" name="form_submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>




            </form>

        </div>

        <div class="container" style="padding:40px;">

            <table class="table" id="myTable">
                <thead>
                <tr>
                    <th>TIMESTAMP</th>
                    <th>ID</th>
                    <th>DETAILS</th>
                    <th>INFLOW</th>
                    <th>OUTFLOW</th>
                </tr>
                </thead>

                <tbody>
                <?php

                $conn=mysqli_connect("localhost:3306", "jugaad","VNIT@123","Jugaad18");
                $result=mysqli_query($conn, "SELECT * FROM $filename");

                while ($row = mysqli_fetch_assoc($result)):
                ?>
                    <tr>
                        <td><?php echo $row['reg_date'];?></td>
                        <td><?php echo $row['ID'];?></td>
                        <td><?php echo $row['DETAILS'];?></td>
                        <td><?php echo $row['INFLOW'];?></td>
                        <td><?php echo $row['OUTFLOW'];?></td>
                    </tr>

                <?php endwhile; ?>
                </tbody>
            </table>


        </div>



        <?php include("footer.php"); ?>



        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../tables/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- DataTables -->

        <script src="../tables/jquery.dataTables.js"></script>
        <script src="../tables/dataTables.bootstrap.js"></script>

        <script language="javascript">
            $(document).ready(function(){
                $('#myTable').dataTable();
            });
        </script>

        <?php include("scripts.php"); ?>
        <!--========== END JAVASCRIPTS ==========-->
    </body>
</html>