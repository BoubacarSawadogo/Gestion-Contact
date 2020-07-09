<?php

require_once 'connexion.php';
$id = (int) $_GET['id'];
$userName = mysqli_real_escape_string($mysqli, $_POST['userName']);
$password = mysqli_escape_string($mysqli, $_POST['userPassword']);
$courriel = mysqli_real_escape_string($mysqli, $_POST['email']);
$prenom = mysqli_escape_string($mysqli, $_POST['firstName']);
$nom = mysqli_escape_string($mysqli, $_POST['lastName']);
$password = password_hash($password, PASSWORD_DEFAULT);
$query = "UPDATE tp_user SET firstName='$prenom', lastName='$nom', email='$courriel', userName='$userName', userPassword='$password' WHERE id='$id'";

$result = mysqli_query($mysqli, $query);

mysqli_close($mysqli);
