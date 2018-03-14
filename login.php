<?php
session_start();

$userinfo = array(
    'admin' => 'admin',
    'ship' => 'ship'
);

if (isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if (isset($_POST['username'])) {
    if ($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    } else {
        //Invalid Login
    }
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Flaticon CSS -->
        <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
        <!-- font-awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Offcanvas CSS -->
        <link href="css/hippo-off-canvas.css" rel="stylesheet">
        <!-- animate CSS -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- language CSS -->
        <link href="css/language-select.css" rel="stylesheet">
        <!-- owl.carousel CSS -->
        <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="css/magnific-popup.css" rel="stylesheet">
        <!-- Main menu -->
        <link href="css/menu.css" rel="stylesheet">
        <!-- Template Common Styles -->
        <link href="css/template.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.1.min.js"></script>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>

        <h2 style="text-align:center">Login</h2>
        <form action="updateStatus.php">
            <div class="container text-center">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required >

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" name="Login" value="login">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

        </form>


        <form action="index.php">
            <button type="button" class="cancelbtn" ><a href="index.php" style="color: white">Cancel</a></button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </form>
    </div>

</body>
</html>
