<?php session_start();
$check = false;
if(isset($_SESSION['SIZE'])){
    $SIZE = $_SESSION['SIZE'];
    $check = true;
}


?>
<html>
<head>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include("head.php");?>
<body id="main">
    <?php include("header.php");?>


            <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center js__parallax-window" style="background: black 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-100--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">

                    <?php if ($check):?>
                    MEMBER DETAILS
                    <?php else:?>
                    505 ERROR!!
                    <?php endif;?>
                </h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

<div class="container" style="background:#eee;">
    <?php if ($check): ?>
    <form class="form-horizontal" method ="post" action="submit.php">
        <div class="container" style="margin-top:50px">
            <div class="row">
                <div class="  col-lg-4 "> <input class="form-control s-form-v2__input g-radius--50" type="text" name="teamname" placeholder="TEAM NAME" required></div>
                <div class="col-lg-4 ">
                     <div class="form-group">
                <select class="form-control s-form-v2__input g-radius--50" name="zone" required>
                    <option value="">ZONE</option>
                   <option value="EAST">EAST</option>
                   <option value="WEST">WEST</option>
                   <option value="NORTH">NORTH</option>
                    <option value="SOUTH">SOUTH</option>
                </select>

            </div>
                </div>
                <div class="  col-lg-4 "> <input class="form-control s-form-v2__input g-radius--50" type="text" name="password" placeholder="PASSWORD" required></div>
            </div>
        </div>
        <div class="row">
        <?php
        for($i=0; $i<$SIZE; $i++):
        ?>
        <div class="col-lg-4">
            <h2 style="text-align: center">MEMBER <?php echo($i+1) ?></h2>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="name[]" placeholder="NAME" required>

            </div>
            <br>
              <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="college[]" placeholder="COllege" required>

            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="text" name="contact[]" pattern="[789][0-9]{9}" placeholder="CONTACT" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <input class="form-control s-form-v2__input g-radius--50" type="email" name="email[]" placeholder="EMAIL" autocomplete="off" required>
            </div>
        </div>
        <?php endfor; ?>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <input type="submit" name="submit" value="REGISTER" class="btn btn-info" style="text-align: center">
            </div>
        </div>
    </form>
    <?php else:?>
    <p style="text-align: center; margin-top:60px"> Kindly Select the Team Size First!!</p>
    <p style="text-align: center; margin-top:50px;"><a href="http://jugaad.ecellvnit.org">GO BACK</a></p>
    <?php endif;?>

</div>
<?php include("footer.php");?>
<?php include("scripts.php");?>
</body>
</html>