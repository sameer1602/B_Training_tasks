<?php 
include("init.php");
include("insert.php");
include("delete.php");
include("update.php");
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
 
                  


    <script type="text/javascript" src="./script.js"></script>
<?php
include("display.php");
?>
</body>
</html>