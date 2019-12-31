<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include("head.php");?>

<body id="main">

    <?php include("header.php");?>

            <!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'):?>
                Submitted Successfully!!
                <?php else:?>
                505 ERROR!!
                <?php endif;?>
            </h1>
        </div>
    </div>


    <!--========== END PROMO BLOCK ==========-->
    <div class="container" >
        <div style="width:100%; background:#fff;padding:60px 50px">

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'):?>
            <p style="text-align: center; margin-top:20px;">Further Details and Instructions have been mailed to you.<br>ALL THE BEST !!!
               <!--
                

            </p>
            <?php else:?>

            <p style="text-align: center; margin-top:20px;"><a href="http://jugaad.ecellvnit.org">GO BACK</a></p>
            <?php endif;?>


        </div>
    </div>
    <?php include("footer.php");?>
    <?php include("scripts.php");?>
</body>
</html>
