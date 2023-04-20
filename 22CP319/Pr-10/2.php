<?php
	function fact($n)
	{
		if($n==1)
			return 1;
		else
			return $n*fact($n-1);
	}
	$fact=fact(5);
	echo "Factorial of 5 using fuction is " . $fact;
	echo "<br>";
	echo "PHP SELF :- " . $_SERVER['PHP_SELF'];
	echo "<br>";
	echo "SERVER NAME :- " . $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "HTTP HOST :- " . $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo "HTTP_REFERER :- " . $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo "USER AGENT :- " . $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo "SCRIPT NAME :- " . $_SERVER['SCRIPT_NAME'];
	echo "<br>String Functions:-<br>";
	$str="Abhishek";
	$str1="Abhishek Nalla";
	echo "Length of string \"Abhishek\" :- " . strlen($str) . "<br>";
	echo "String\"shek\" position in string \"Abhishek\" :- " . strpos($str, "shek") . "<br>";
	echo "Sub-string of string \"Abhishek\" from position 2 :- " . substr($str, 2) . "<br>";
	echo "Word Count of string \"Abhishek Nalla\" :- " . str_word_count($str1) . "<br>";
	echo "Reverse of string \"Abhishek\" :- " . strrev($str) . "<br>";
	echo "String to uppercase :- " . strtoupper($str) , "<br>";
	echo str_replace("world", $str, "Hello world!");
?>