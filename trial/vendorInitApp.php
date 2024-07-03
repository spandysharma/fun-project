<!-- Vendor submission form -->

<!-- <?php
// function debug_to_console($data) {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }
// debug_to_console("vendorinit.php starting");
// if (isset($_POST['submitButton'])) {
//     if ((!isset($_POST['vendorType'])) ||
//         (!isset($_POST['title'])) ||
//         (!isset($_POST['description'])) ||
//         (!isset($_POST['deadline'])) ||
//         (!isset($_POST['coverPhoto'])) ||
//         (!isset($_POST['status'])) ||
//         (!isset($_POST['dateCreated']))
//     ) {
//         $error = "*" . "Please fill all the required fields";
//     } else {
//         $vendorType = $_POST['vendorType'];
//         $title = $_POST['title'];
//         $description = $_POST['description'];
//         $deadline = date('Y/m/d');;
//         $coverPhoto = $_POST['coverPhoto'];
//         $status = 'in review';
//         $dateCreated = date('Y/m/d');
//     }
//     echo "Hello world";

//     $connect = mysqli_connect(
//         'db', # service name
//         'php_docker', # username
//         'password', # password
//         'php_docker' # db table
//     );

//     $table_name = "php_docker_table";

    // check if vendor already has a stall
//     $vendorCheck = "SELECT * FROM $table_name WHERE `title`='{$title}'";
//     debug_to_console($title);
//     debug_to_console(mysqli_num_rows(mysqli_query($connect, $vendorCheck)));
//     // if vendor doesn't exist in system, add them
//     if (mysqli_num_rows(mysqli_query($connect, $vendorCheck)) == 0) {
//         debug_to_console("new entry vendorinitapp");
//         debug_to_console($title);
//         $addVendor = "INSERT INTO $table_name VALUES (NULL, '$vendorType', '$title', '$description', '$deadline', '$coverPhoto', '$status', '$dateCreated');";
//         debug_to_console($addVendor);
//         $response = mysqli_query($connect, $addVendor);
//     }

//     debug_to_console("vendorinit.php leaving");
// }
?> -->

<?php
if (isset($_POST['submitButton'])) {
    if ((!isset($_POST['vendorType'])) ||
        (!isset($_POST['title'])) ||
        (!isset($_POST['description'])) ||
        (!isset($_POST['deadline'])) ||
        (!isset($_POST['coverPhoto'])) ||
        (!isset($_POST['status'])) ||
        (!isset($_POST['dateCreated']))
    ) {
        $error = "*" . "Please fill all the required fields";
    } else {
        $vendorType = $_POST['vendorType'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $deadline = date('Y/m/d');;
        $coverPhoto = $_POST['coverPhoto'];
        $status = 'in review';
        $dateCreated = date('Y/m/d');
    }
    echo "Hello world";
}
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
    <header>
        <h1>Welcome to Foodventeny</h1>
    </header>
    <form id="vendorInitialApplication" action="vendorTwo.php" method="post">
        <input type="hidden" name="title" value="{$title}">

        <h2>Please provide the following product information:</h2>
        <?php
        if (isset($_POST['submitButton'])) {
            if (isset($error)) {
                echo "<p style='color:red;'>"
                    . $error . "</p>";
            }
        }
        ?>
        <ol style="list-style: none;">
            <li>
                <label for="vendorType">What type of vendor are you?</label>
                <input list="vendorOptions" id="vendorType" name="vendorType" placeholder="Restaurant, farmer, non profit ..." required>
                <datalist id="vendorOptions">
                    <option value="restaurant">
                    <option value="farmer">
                    <option value="small business">
                    <option value="animal shelter">
                    <option value="community outreach">
                    <option value="other">
                </datalist>
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="title">Stall name:</label>
                <input type="text" id="title" name="title" placeholder="" required>
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="description">Stall description:</label>
                <input type="text" id="description" name="description" placeholder="">
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="deadline">Deadline:</label>
                <input type="date" id="deadline" name="deadline" placeholder="">
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT CALENDAR TYPE HERE -->
            </li>
            <li>
                <label for="coverPhoto">Cover photo:</label>
                <input type="file" id="coverPhoto" name="coverPhoto" placeholder="" accept="image/png, image/jpeg">
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT image TYPE HERE -->
            </li>
            <li>
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" placeholder="">
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="dateCreated">Application date</label>
                <input type="date" id="dateCreated" name="dateCreated" placeholder="">
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT CALENDAR TYPE HERE -->
            </li>
        </ol>
        <input type="submit" value="Submit" class="button" name="submitButton">

    </form>
</body>
<footer>

</footer>

</html>