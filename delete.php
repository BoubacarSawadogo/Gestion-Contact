<?php

require_once 'connexion.php';
$id = (int) $_GET['id'];
$query = "DELETE FROM tp_user WHERE id='$id'";
$result = mysqli_query($mysqli, $query);
