<?php
    session_start();
    if(isset($_SESSION['user']))
    {
        echo "You are logged in...";
        ?>
        <a href="logout.php">Logout</a>
        <?php
    }
    else
    {
        echo "You are not logged in...";
        header("location: form.html");
    }
?>