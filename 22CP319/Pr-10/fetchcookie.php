<?php
    $cname=$_POST['cname'];
    if(isset($_COOKIE[$cname]))
    {
        echo "Value of cookie is " . $_COOKIE[$cname];
    }
?>