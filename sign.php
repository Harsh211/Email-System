<?php
$conn=mysqli_connect("localhost","root","","db11");
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a3=@$_GET[t3];
$a4=@$_GET[t4];
$a5=@$_GET[t5];
$a6=@$_GET[t6];
//$a7=@$_GET[t7];
 if(!preg_match("/^[a-zA-Z\. ]*$/",$a1) )
        {
            header("location:index.php?x=4");
        }
        else if (!preg_match("/^[a-zA-Z\. ]*$/",$a2) ) {
        	 header("location:index.php?x=5");

        }
        else if(!preg_match("/^[a-zA-Z ]{1}[a-zA-Z0-9 ]{2,12}+@+mailcircle.com/",$a3) )
        {
              header("location:index.php?x=6");
        }
        else if(!preg_match("/^[789]\d{9}$/",$a6))
        {
            header("location:index.php?x=7");
        }
        else if(!preg_match("/^[a-zA-Z0-9 ]{6,20}/",$a4) )
        {
              header("location:index.php?x=8");
        }
        else{
$res=mysqli_query($conn,"select * from elogin where uid='$a3'");
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
	mysqli_query($conn,"insert into elogin values('$a3','$a4')");
	mysqli_query($conn,"insert into eusers values('$a3','$a1','$a2','$a5','$a6')");
	header("location:index.php?x=2");
}
else
{
	header("location:index.php?x=1");
}
}
?>