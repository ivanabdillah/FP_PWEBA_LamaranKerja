<?php
    session_start();
    include('connect.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from user where email = '$email'";
    $query = mysqli_query($db_connection, $sql);
    $result = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        echo "<p>salah email <a href='form-login.php'>back</a></p>";
    }
    else {
        if (($password) != $result['password']) {
            echo "<p>salah password <a href='form-login.php'>back</a></p>";
        }
        else {
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['id'] = $result['id'];
            header('location: index.php');
        }
    }

?>