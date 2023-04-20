<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        input[type=text], input[type=password], input[type=number], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 35%;
            margin: auto;
            margin-top: 7%;
        }
        </style>
    </head>
    <body>
        <div>
        <form action="" method="POST">
            <center> <label><h2><b>Product Form</b></h2></label></center><br>
            <label for="pname">Product Name</label>
            <input type="text" id="pname" name="pname" placeholder="Product name..">
            <label for="pprice">Product Price</label>
            <input type="number" id="pprice" name="pprice" placeholder="Product price..">
            <label for="pcate">Product Category</label>
            <select id="pcate" name="pcate">
            <option value="None" selected>None</option>
            <option value="Beauty">Beauty</option>
            <option value="Men Clothing">Men Clothing</option>
            <option value="Women Clothing">Women Clothing</option>
            </select>
            <input type="submit" name="btnSubmit" value="Submit">
        </form>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['btnSubmit']))
    {
        $pname=$_POST['pname'];
        $pprice=$_POST['pprice'];
        $pcate=$_POST['pcate'];
        $sql="INSERT INTO tbl_product(proName, proPrice, proCategory) VALUES('$pname','$pprice','$pcate')";
        if(mysqli_query($conn, $sql))
        {
            echo '<script>alert("Product Added Successfully..");</script>';
        }
        else
        {
            echo '<script>alert("Product Not Added Successfully..");</script>';
        }
    }
?>