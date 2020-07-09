<?php

require_once 'connexion.php';
if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['userName']) && !empty($_POST['userPassword'])) {
    $userName = mysqli_real_escape_string($mysqli, $_POST['userName']);
    $password = mysqli_escape_string($mysqli, $_POST['userPassword']);
    $courriel = mysqli_real_escape_string($mysqli, $_POST['email']);
    $prenom = mysqli_escape_string($mysqli, $_POST['firstName']);
    $nom = mysqli_escape_string($mysqli, $_POST['lastName']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO tp_user (firstName, lastName, email, userName, userPassword) VALUES ( '$prenom','$nom','$courriel','$userName','$password')";
    $result = mysqli_query($mysqli, $query);

    // Libère la connection
    mysqli_close($mysqli);
} else {
    header('location:form.php');
}
