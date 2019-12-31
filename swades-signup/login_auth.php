<?php
session_start();


if( $_SERVER['REQUEST_METHOD'] == 'POST' or $_SESSION['auth'])
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    if( empty($name) ) {
        die ("ERROR: Please enter username!");
    }
    if( empty($pass) ) {
        die ("ERROR: Please enter password!");
    }


    if( $name == "e" && $pass == "j" )
    {
        // Authentication successful - Set session

        $_SESSION['auth'] = true;
        // setcookie("username", $_POST['name'], time()+(84600*30));
        header('Location: database.php');
        exit;
    }
    else {
        echo "ERROR: Incorrect username or password!";
    }
}


// If no submission, display login form
else {
?>
    <html>
    <head>    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125403862-1');
    </script>
    <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	    <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JUGAAD'18 | E-CELL | VNIT</title>
        <meta name="keywords" content="Ecell, vnit, E-cell VNIT, entreprenuship cell, consortium 18, 2018, consortium'18, Jugaad, Jugaad 18" />
        <meta name="description" content="Jugaad is an annual event organised by Ecell VNIT which aims to create an inexorable spirit of entrepreneurship amongst students, with the freshmen as particular consideration for the Club. It aims to function as a guide in the form of a fun event for students with creative ideas which can be transformed into successful street level transactions.">
        <meta name="author" content="Sagar Bansal">
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/icon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    </head>
    <body>
    <center>
    <form method="post" action="">
    Username: <input type="text" name="name">
    <p />
    Password: <input type="password" name="pass">
    <p />
    <input type="submit" name="submit" value="Log In">
    </center>
    </body>
    </html>
<?php
}
?>


