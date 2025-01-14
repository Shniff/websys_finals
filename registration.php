<?php 
    session_start();
    require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");

    if (isset($_SESSION["error"])) {
        $messageErr = $_SESSION["error"];
        unset($_SESSION["error"]);
    }
    if (isset($_SESSION["success"])) {
        $messageSucc = $_SESSION["success"];
        unset($_SESSION["success"]);
    }
?>

<link rel="stylesheet" href="Styles.css">
<body class="registration-page">
<div class="registration-container">
    <div class="form-card">
        <h2 class="bg-primary text-white">Create an Account</h2>
   
        <!-- Message response -->
        <?php if (isset($messageSucc)) { ?>
            <div class="alert alert-success">
                <strong><?php echo $messageSucc; ?></strong>
            </div>
        <?php } ?>

        <?php if (isset($messageErr)) { ?>
            <div class="alert alert-danger">
                <strong><?php echo $messageErr; ?></strong>
            </div>
        <?php } ?>

        <form action="app/auth/Register.php" method="POST">
            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
            <button type="submit" class="btn-register">Sign Up</button>
        </form>
        <a href="login.php" class="login-link">Already have an account? Log in</a>
    </div>
</div>
</body>
<?php require_once(ROOT_DIR . "includes/footer.php"); ?>
