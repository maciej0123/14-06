<?php

$uzy = 'login';
$haslo = 'haslo';

if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['logout'])) {
    if ($uzy == $_POST['login'] && $haslo == $_POST['haslo']) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['haslo'] = $_POST['haslo'];
    } else {
        echo '<span style="color: red">Niepoprawna hasla uzytkownika lub haslo</span>';
    }
}

if (!empty($_SESSION)) {
    echo '<span style="color: green; float: right;">Zalogowany jako "' . htmlspecialchars($uzy) . '"</span>';
    echo '<br>';
}
?>
