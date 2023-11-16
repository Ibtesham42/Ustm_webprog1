<?php
//Program in php to enter two string ,join them ,reverse the join string and find the length of all strings
$s1="Nazir";
$s2="Uddin";
$s3=$s1.$s2;
echo "String after joining :",$s3;
$rev=strrev($s3);
echo "<br>String after reversing :",$rev;
echo"<br>Length of string 1 :",strlen($s1);
echo"<br>Length of string 2 :",strlen($s2);
echo"<br>Length of string after joining :",strlen($rev);
?>