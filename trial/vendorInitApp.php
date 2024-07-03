<!-- Vendor submission form -->

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
    <form id="vendorInitialApplication" action="display.php" method="post">
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
                <input type="date" id="deadline" name="deadline" placeholder="" >
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT CALENDAR TYPE HERE -->
            </li>
            <li>
                <label for="coverPhoto">Cover photo:</label>
                <input type="file" id="coverPhoto" name="coverPhoto" placeholder="" accept="image/png, image/jpeg" >
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT image TYPE HERE -->
            </li>
            <li>
                <label for="status">Status:</label>
                <input type="text" id="status" name="status" placeholder="" >
                <span style="color:red;">*</span>
            </li>
            <li>
                <label for="dateCreated">Application date</label>
                <input type="date" id="dateCreated" name="dateCreated" placeholder="">
                <span style="color:red;">*</span>
                <!-- MAKE THE INPUT CALENDAR TYPE HERE -->
            </li>
        </ol>
        <input type="submit" value="Submit" onclick="submitForm()" class="button" name="submitButton">   

    </form>
</body>
<footer>

</footer>
</html>