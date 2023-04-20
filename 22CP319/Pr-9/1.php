<?php
    echo "Echo Statement<br>";
    print("Print Statement<br>");
    echo "<b>Printing the Datatypes</b>:-<br>";
    $str="Abhishek";
    $num=319;
    $float=22.319;
    $bool=true;
    $null=null;
    $arr=array(8,11,15,19,22);
    var_dump($str);
    echo "<br>";
    var_dump($num);
    echo "<br>";
    var_dump($float);
    echo "<br>";
    var_dump($bool);
    echo "<br>";
    var_dump($null);
    echo "<br>";
    var_dump($arr);
    echo "<br>";
    echo "If Else:-<br>";
    if($null!=NULL)
        echo "Variable is not having NULL value...<br>";
    else
        echo "Variable is having NULL value...<br>";
    echo "Switch:-<br>";
    switch($num)
    {
        case 319:
            echo "Abhishek Nalla-319<br>";
            break;
        case 311:
            echo "Pratik-311<br>";
            break;
    }
    echo "While loop:-<br>";
    $i=$j=1;
    while($i<=10)
    {
        echo $j . "x" . $i . "=" . $j*$i . "<br>";
        $i++;
    }
    echo "For loop:-<br>";
    for($i=1,$j=2;$i<=10;$i++)
    {
        echo $j . "x" . $i . "=" . $j*$i . "<br>";
    }
    echo "Associative Array:-<br>";
    $array=array(
        "CP" => "Computer Engineering",
        "IT" => "Information Technology",
        "CSE" => "Computer Science and Engineering"
    );
    foreach($array as $key => $value)
    {
        echo $key . " full form is " . $value . "<br>";
    }
?>