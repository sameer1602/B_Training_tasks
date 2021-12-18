<?php
//delete
if(isset($_POST['delete'])==TRUE)
{ 
    $cid = $_POST['delete'];

$sql= "DELETE from countrydb where cid='$cid'";
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