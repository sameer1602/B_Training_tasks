<?php
include('init.php');
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
?>