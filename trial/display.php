<!-- Display summary of Vendor Application Submission (vendorInitApp) -->

<?php
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
debug_to_console("display.php starting");
$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";

$title = $_POST['title'];

$query = "SELECT * FROM $table_name WHERE `title` = '{$title}'";

$response = mysqli_query($connect, $query);


debug_to_console("display.php leaving");
debug_to_console($title);

?>

<html>

<head>
    <meta charset="utf-8">
    <title> Foodventeny Vendor Application</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
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
                <?php while ($i = mysqli_fetch_assoc($response)) { ?>
                    <td><?php echo $i['vendorType']; ?></td>
                    <td><?php echo $i['title']; ?></td>
                    <td><?php echo $i['description']; ?></td>
                    <td><?php echo $i['deadline']; ?></td>
                    <td><?php echo $i['coverPhoto']; ?></td>
                    <td><?php echo $i['status']; ?></td>
                    <td><?php echo $i['dateCreated']; ?></td>

            </tr>
        <?php } ?>
        </table>
    </div>

</body>
<footer>
</footer>

</html>