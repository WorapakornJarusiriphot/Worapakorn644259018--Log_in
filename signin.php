<?php
session_start();
//require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System with PHP PDO MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D&family=Kanit:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <link href="./signin.css" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <div class="woja-section">
            <div class="woja-logo">WOJA</div>
            <div class="woja-description">WOJA เชื่อมต่อด้วยความจริงใจ แชร์ด้วยความห่วงใย ให้โลกนี้เต็มไปด้วยความรักและความสุข</div>
        </div>

        <div class="container">
            <h3>Sign In</h3>
            <form action="signin_db.php" method="POST">
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['warning'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                        ?>
                    </div>
                <?php } ?>
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="txtemail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="txtpasssowrd" name="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary" name="signin">Sing In</button>
            </form>
            <br>
            <p>Not the member <a href="index.php">Click here</a> to register</p>
        </div>
    </div>


</body>

</html>