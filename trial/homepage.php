<html>

<head>
    <meta charset="utf-8">
    <title> Foodventeny Vendor Application</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
    <script>
        function lookupTitle() {
            const userEnteredTitle = document.getElementById("inputTitle").value;
            document.getElementById("searchedTitle").value = userEnteredTitle;
            console.log("hellooooo");
            console.log(document.getElementById("inputTitle").value);
        }
    </script>
</head>

<body>
    <header>
        <h1>Welcome to Foodventeny</h1>
    </header>
    <div>
        <form id="homepagePrevApp" action="display.php" method="post">
            <input type="hidden" name="title" id="searchedTitle">
            <input type="text" name="inputTitle" id="inputTitle" onchange="lookupTitle()">
            <input type="submit" value="Find my application">
        </form>
        <!-- <a href="display.php">
                <button></button>
            </a> -->
        <a href="vendorInitApp.php">
            <button>Submit new application</button>
        </a>
    </div>

</body>
<footer>
</footer>

</html>