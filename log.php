<?php
session_start();

$conn=mysqli_connect("localhost","root","","db11");

$a1=@$_GET[t1];
$a2=@$_GET[t2];
$str = rtrim($a1,"@mailcircle.com");

$gp="select * from elogin where uid='$a1' and pwd='$a2'";
$res=mysqli_query($conn,$gp);
$cnt=mysqli_num_rows($res);
if($cnt==1)
{
	$_SESSION[uid]=$str;
	header("location:inbox.php");
}
else
{
	header("location:index.php?x=3");
}
?>