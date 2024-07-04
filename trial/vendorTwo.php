<?php
    include "vendorInitApp.php";

    $connect = mysqli_connect(
        'db', # service name
        'php_docker', # username
        'password', # password
        'php_docker' # db table
    );
    
    $table_name = "php_docker_table";
    $vendorCheck = "SELECT * FROM $table_name WHERE `title`='{$title}'";
    
    // if vendor doesn't exist in system, add them
    if (mysqli_num_rows(mysqli_query($connect, $vendorCheck)) == 0) {
        $addVendor = "INSERT INTO $table_name VALUES (NULL, '$vendorType', '$title', '$description', '$deadline', '$coverPhoto', '$status', '$dateCreated');";
        $response = mysqli_query($connect, $addVendor);
    }
    

    if(isset($_POST['submitButton']))
        {
            if(!isset($error))
            {
        echo"";
        echo"<h1>Thank you for your application!</h1>";
        echo"<h2>The organizer will be in contact with you shortly.</h2><br>";
        echo "<table border='1'>";
        echo "<thead>";
        echo "<th>Parameter</th>";
        echo "<th>Value</th>";
        echo "</thead>";
        echo "<tr>";
        echo "<td>Vendor Type</td>";
        echo "<td>".$vendorType."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Stall Name</td>";
        echo "<td>".$title."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Stall Description</td>";
        echo "<td>".$description."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Response Needed By</td>";
        echo "<td>" .$deadline."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Cover Picture</td>";
        echo "<td>".$coverPhoto."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Application Status</td>";
        echo "<td>".$status."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Application Submitted On</td>";
        echo "<td>".$dateCreated."</td>";
        echo "</tr>";
        echo "</table>";
    } }
?>