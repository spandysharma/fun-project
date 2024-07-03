<?php
    include "vendorInitApp.php";

    $connect = mysqli_connect(
        'db', # service name
        'php_docker', # username
        'password', # password
        'php_docker' # db table
    );
    
    $table_name = "php_docker_table";
    
    $query = "INSERT INTO $table_name VALUES (NULL, '$vendorType', '$title', '$description', '$deadline', '$coverPhoto', '$status', '$dateCreated');";
    
    $response = mysqli_query($connect, $query);
    if(isset($_POST['submitButton']))
        {
            if(!isset($error))
            {
        echo"<h1>INPUT RECEIVED</h1><br>";
        echo "<table border='1'>";
        echo "<thead>";
        echo "<th>Parameter</th>";
        echo "<th>Value</th>";
        echo "</thead>";
        echo "<tr>";
        echo "<td>Product Name</td>";
        echo "<td>".$vendorType."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Product Price</td>";
        echo "<td>".$title."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Product description</td>";
        echo "<td>".$description."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Product Dimensions</td>";
        echo "<td>" .$deadline."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Units Choice</td>";
        echo "<td>".$coverPhoto."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Product Delivery Time Start   </td>";
        echo "<td>".$status."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Product Delivery Time End     </td>";
        echo "<td>".$dateCreated."</td>";
        echo "</tr>";
        echo "</table>";
    } }
?>