<? php 
include 'init.php';
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Country Todo List</title>
    <center><h1>Country Todo List</h1></center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud operation in javascript</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body style="background-color: rgb(255, 145, 0);">
    <? php 
include 'init.php';
?>
    <table>
        <tr>
            <td>
                <!--HTML form for crud operation-->
                <form autocomplete="off" onsubmit="onFormSubmit()">
                    <div>
                        <label for="CountryName">Country Name</label>
                        <input type="text" name="CountryName" id="CountryName" >
                    </div>
                    <div>
                        <label for="CountryCode">Country Code</label>
                        <input type="text" name="CountryCode" id="CountryCode" >
                    </div>
                    <div>
                        <label for="Capital">Capital</label>
                        <input type="text" name="Capital" id="Capital">
                    </div>
                    <div>
                        <label for="Continent">Continent</label>
                        <input type="text" name="Continent" id="Continent">
                    </div>
                    <div class="form_action--button">
                        <input type="hidden" name="MAX_FILE_SIZE" value="" />
                        <label for="Fileupload">Choose a file to Upload</label><br/><br/>
                        <input name="uploadedfile" type="file" /><br /><br/>
                        <input type="submit" name="submit" value="Upload File" />
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="employeeList">
                    <thead>
                        <tr>
                            <th>Country Name</th>
                            <th>Country Code</th>
                            <th>Capital</th>
                            <th>Continent</th>
                            <th> </th>
                            <th>Uploaded File</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>