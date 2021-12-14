<?php 
include("init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud operation in javascript</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body style="background-color: rgb(255, 145, 0);">

<form action="#" enctype="multipart/form-data" method="post">
                    <div>
                        <label for="CountryName">Country Name</label>
                        <input type="text" name="country_name" id="country_name" >
                    </div>
                    <div>
                        <label for="CountryCode">Country Code</label>
                        <input type="text" name="country_code" id="country_code" >
                    </div>
                    <div>
                        <label for="Capital">Capital</label>
                        <input type="text" name="capital" id="capital">
                    </div>
                    <div>
                        <label for="Continent">Continent</label>
                        <input type="text" name="continent" id="continent">
                    </div>
                    <div class="form_action--button">
                        <input type="hidden" name="MAX_FILE_SIZE" value="" />
                        <label for="Fileupload">Choose a file to Upload</label><br/><br/>
                        <input name="image"  type="file" /><br /><br/>
                        
                        <input type="submit" name="btn" value="Submit"/>
                        <input type="reset" value="Reset">
                    </div>
                </form>
 
                  

    <?php
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
//display

function display($conn){
    $sql = "SELECT cid,country_name, country_code ,capital , continent, uploadfile from countrydb";
    $result = mysqli_query($conn,$sql);
    echo "<h1>Country Todo List</h1>";
     echo "<table id='table2' border='1' class='list' id='countryList'>";
       echo "<form action='index.php' method='post'>";
       echo "<thead>
       <tr>
           <th>Country Name</th>
           <th>Country Code</th>
           <th>Capital</th>
           <th>Continent</th>
           <th>Actions</th>
           <th>Uploaded File</th>
       </tr>
   </thead>";
    if(mysqli_num_rows($result)>0){
     
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr><td>" . $row["country_name"] . "</td> <td>". $row["country_code"] . "</td>  <td>". $row["capital"] . "</td> <td>". $row["continent"] . "</td>              
  <td><button type='submit' name='delete' id='delete'  value=" . $row["cid"] . ">Delete</button> <br><br>
    <button name='update' id='update'  value=" . $row["cid"] . ">Update </button></td>
    <td><img src='" . $row['uploadfile'] . "' width='100' height='100' /> </td> </tr>";
        }
        echo "</form>";
        echo "</table>";
    }  
    mysqli_free_result($result);
    }
    display($conn);

//delete
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
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>