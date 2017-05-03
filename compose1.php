<?php
session_start();

$conn=mysqli_connect("localhost","root","","db11");

$uid=@$_SESSION[uid];
if($uid==null)
{
	header("location:index.php");
};

$a1=@$_POST[t1];
$a2=@$_POST[t2];
$a3=@$_POST[t3];
$a4=@$_POST[t5];

/*
$w1=$_FILES[t4][name];
$w2=$_FILES[t4][size];
$q1=substr($w1,-3);
$w3=$_FILES[t4][type];
$w4=$_FILES[t4][tmp_name];

$w5='C:/xampp/htdocs/11-12/email/files/'.$w1;
move_uploaded_file($w4,$w5);*/

$target_dir = "C:/xampp/htdocs/11-12/email/";
$target_file = $target_dir . basename($_FILES["t4"]["name"]);
$d1 = $_FILES["t4"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["t4"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;*/
// Check if $uploadOk is set to 0 by an error
else {
      move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file);
}


$ins="select * from elogin where uid='$a1'";
$res= mysqli_query($conn,$ins);
$cnt=mysqli_num_rows($res);
if($cnt!=1)
{
	header("location:inbox.php?x=3");
}
else{
	mysqli_query($conn,"insert into emsg(rid,sid,sub,msg,date1,attach) values('$a1','$uid','$a2','$a3','$a4','$d1')");
	header("location:inbox.php?x=2");
};

?>