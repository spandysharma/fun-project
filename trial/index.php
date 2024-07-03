<!-- Organizer perspective (read vendor forms and update status) -->

<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
?>
<html>

<head>
    <meta charset="utf-8">
    <title> Foodventeny Vendor Application</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
    <!-- <script>
        function updateStatus(rowIndex) {
            // Get the selected status from the input field
            const selectedStatus = document.getElementById('statusType_' + rowIndex).value;
            
            // Update the status directly in the table cell
            const statusCell = document.getElementById('statusCell_' + rowIndex);
            statusCell.textContent = selectedStatus;
        }
    </script> -->
    <script>
    function updateStatus(rowIndex) {
        // Get the selected status from the input field
        const selectedStatus = document.getElementById('statusType_' + rowIndex).value;
        
        // Update the status directly in the table cell
        const statusCell = document.getElementById('statusCell_' + rowIndex);
        statusCell.textContent = selectedStatus;
        
        // Send AJAX request to update status in the database
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'update_status.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Status updated successfully.');
            } else {
                console.log('Status update failed.');
            }
        };
        xhr.send('id=' + rowIndex + '&status=' + encodeURIComponent(selectedStatus));
    }
</script>

</head>
<body>
    <div>
        <table>
            <tr>
                <td>Type of Vendor</td>
                <td>Stall Name</td>
                <td>Stall Description</td>
                <td>Deadline</td>
                <td>Cover Photo</td>
                <td>Status</td>
                <td>Application date</td>
            </tr>
            <tr>
                <?php while($i = mysqli_fetch_assoc($response)) { ?>
                <td><?php echo $i['vendorType']; ?></td>
                <td><?php echo $i['title']; ?></td>
                <td><?php echo $i['description']; ?></td>
                <td><?php echo $i['deadline']; ?></td>
                <td><?php echo $i['coverPhoto']; ?></td>
                <td id="statusCell_<?php echo $i['id']; ?>"><?php echo $i['status']; ?></td>
                <td>
                    <input list="statusOptions" id="statusType_<?php echo $i['id']; ?>" name="statusType" placeholder='<?php echo $i['status']; ?>'>
                    <datalist id="statusOptions">
                        <option value="approved">
                        <option value="waitlisted">
                        <option value="denied">
                        <option value="in review">
                    </datalist>
                    <button onclick="updateStatus(<?php echo $i['id']; ?>)">Update Status</button>
                </td>
                <td><?php echo $i['dateCreated']; ?></td>
                
            </tr>
            <?php } ?>
        </table>
    </div>

</body>
<footer>
</footer>
</html>




<!-- while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['vendorType']."</p>";
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['description']."</p>";
    echo "<p>".$i['deadline']."</p>";
    echo "<p>".$i['coverPhoto']."</p>";
    echo "<p>".$i['status']."</p>";
    echo "<p>".$i['dateCreated']."</p>";
    echo "<hr>";
} -->