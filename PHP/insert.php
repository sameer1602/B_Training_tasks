<?php
include('init.php');

//insert
if(isset($_POST['btn']))
{ 
    $country_name = $_POST['country_name'];
    $country_code = $_POST['country_code'];
    $capital = $_POST['capital'];
    $continent = $_POST['continent'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/". $filename;
    move_uploaded_file($tempname,$folder);

$sql= "INSERT INTO countrydb ( country_name, country_code, capital, continent, uploadfile) VALUES ('$country_name','$country_code' ,'$capital' ,'$continent' ,'$folder')";
echo $sql;
if(mysqli_query($conn,$sql)){
    echo "<script> window.location='index.php';</script>";
    display();
    exit;
}
else 
{
    echo "Failed";
}
}
?>