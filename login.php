<?php
    session_start();
    include('includes/db.php');

    if ($_SERVER('REQUEST_METHOD') == 'POST'){
        $username = $_POST('username');
        $password = $_POST('password');

        $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $query->bind_parem('s', $username);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0){
            
        }
    }
?>