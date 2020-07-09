<?php

session_start();

if (!empty($_GET['action'])) {
    if ($_GET['action'] === 'logout') {
        $_SESSION['userName'] = '';
        session_destroy();
        unset($_SESSION['userName']);
    }
}
