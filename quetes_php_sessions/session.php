<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    if (empty($_POST['loginname'])) {
        $errors[] = 'Please enter a username !';
        foreach ($errors as $error) {
            echo $error;
        }
    } else if (empty($errors)) {
        $_SESSION["loginname"] = $_POST['loginname'];
        header('Location: /index.php');
    }
}


?>