<?php
include 'init.php';
//delete
if(isset($_POST['update'])==TRUE)
{ 
    $country_name = $_POST['country_name'];
    $country_code = $_POST['country_code'];
    $capital = $_POST['capital'];
    $continent = $_POST['continent'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/". $filename;
    move_uploaded_file($tempname,$folder);
    $cid = $_POST['delete'];

$sql= "UPDATE from countrydb SET country_name='$country_name', country_code='$country_code',capital='$capital', continent='$continent',uploadfile='$folder' WHERE cid='$cid'";
if(mysqli_query($conn,$sql)){
    echo "<script> window.location='index.php';</script>";  
    display();
    exit;
}
else 
{
    echo "Invalid Data";
}
}

?>