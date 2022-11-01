<?php
if (!isset($_SESSION['loginname'])) {
    header('Location: /login.php');
    exit();
}

?>