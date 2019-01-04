<?php

echo " HEllo! <br>";
$n2=56;
$n1=43;
$n3=78;
$n4=69;
$n5=45;
$tot=$n1+$n2+$n3+$n4+$n5;
$per=$tot/5;
echo "Total is :".$tot;
echo "<br> Percentage is :".$per;
echo"<br>";
if($per>=70)
{
	echo"Distinction";
}
if($per>60&&$per<70)
{
	echo"First class";
}
if($per<60&&$per>=40)
{
	echo"Second class";
}
if($per<40)
{
	echo"Fail";
}
?>