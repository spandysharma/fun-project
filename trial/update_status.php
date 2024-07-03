<?php
$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $status = mysqli_real_escape_string($connect, $_POST['status']);

    $query = "UPDATE php_docker_table SET status = '$status' WHERE id = $id";

    if (mysqli_query($connect, $query)) {
        echo 'Status updated successfully.';
    } else {
        echo 'Error updating status: ' . mysqli_error($connect);
    }
}
?>
