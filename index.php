<?php

if (!empty($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'login':
            require_once 'log.php';

            break;

        case 'update':
            require_once 'update.php';

            break;

        case 'sauvegarder':
            require_once 'addUser.php';

            break;

        case 'delete':
            require_once 'delete.php';
            break;
    }
} else {
    header('location:login.php?action=');
}
require_once 'template.php';
