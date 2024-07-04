<!-- Display summary of Vendor Application Submission (vendorInitApp) -->

<?php

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
<nav class="navigation-bar">
        <img class="logo" src="./images/foodventeny.png">
        <div class="navlinks">
            <a href="./homepage.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="./index.php">Organizer?</a>
        </div>
    </nav>
    <div>
        <table class="tableResults">
            <tr>
                <th>Type of Vendor</th>
                <th>Stall Name</th>
                <th>Stall Description</th>
                <th>Deadline</th>
                <th>Cover Photo</th>
                <th>Status</th>
                <th>Application date</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
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
                    <td><?php echo $i['contactName']; ?></td>
                    <td><?php echo $i['contactEmail']; ?></td>
            </tr>
        <?php } ?>
        </table>
    </div>

</body>
<footer>
</footer>

</html>