<?php

// Gabriel Vitor Grossi Lourenço
// GU3054446

require_once 'control/login.php';

if (isset($_SESSION['perfil'])) {
    if ($_SESSION['perfil'] === 'professor') {
        header('Location: view/professor.php');
        exit();
    } elseif ($_SESSION['perfil'] === 'aluno') {
        header('Location: view/aluno.php');
        exit();
    }
}

include 'view/login.php';
