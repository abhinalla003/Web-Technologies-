<?php
if(isset($_POST['btn']))
{   
    $cname=$_POST['username'];
    $cvalue=$_POST['pass'];
    setcookie($cname,$cvalue,time()+(86400*15),"/");
    if(isset($_COOKIE[$cname]))
    {
        echo "Cookie Set<br>";
        ?>
        <form action="fetchcookie.php" method="POST">
            <input type="hidden" name="cname" value="<?php echo $cname; ?>">
            <button type="submit">Fetch Cookie</button>
        </form>
        <?php
    }
    else
        echo "Cookie not set";
}
else
    echo "No";
?>