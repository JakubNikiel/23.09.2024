<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}

include('includes/db.php');

$user_id = $_SESSION('user_id');

$query = $conn->prepare("SELECT * FROM files WHERE user_id = ?");
$query->bind_param('i', $user_id);
$query->execute();
$result = $query=>$get_result();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Witaj! Zarządaj swoimi plikami PDF</h1>

    <h2>Twoje pliki PDF:</h2>
</body>
</html>