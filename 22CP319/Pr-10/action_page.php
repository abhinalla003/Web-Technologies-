<?php
    session_start();
    $userName=$_POST['username'];
    $pass=$_POST['pass'];
    $userType=$_POST['usertype'];
    $_SESSION['user']=$userName;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 50%;
            margin: auto;
            margin-top: 10%;
        }
        </style>
    </head>
    <body>
        <div>
            <center> <label><h2><b>User Details</b></h2></label></center><br>
            Welcome <?php echo $userName; ?>,<br>
            Your password is <?php echo $pass; ?>...<br>
            User Type is <?php echo $userType; ?>...<br>
            <form action="cookie.php" method="post">
                <input type="hidden" name="username" value="<?php echo $userName;  ?>">
                <input type="hidden" name="pass" value="<?php echo $pass;  ?>">
                <button type="submit" name="btn">Set Cookie</button>
            </form>
        </div>
    </body>
</html>