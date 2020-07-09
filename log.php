<?php

require_once 'connexion.php';
if (!empty($_POST['userName']) && !empty($_POST['password'])) {
    $userName = mysqli_real_escape_string($mysqli, $_POST['userName']);
    $password = mysqli_escape_string($mysqli, $_POST['password']);
    $query = "SELECT * FROM tp_user where userName='$userName'";

    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if (password_verify($password, $row['userPassword'])) {
                $_SESSION['userName'] = $userName;
            } else {
                header('location:login.php');
            }
        }
        mysqli_free_result($result);

        mysqli_close($mysqli);
    } else {
        header('location:login.php');
    }
}
