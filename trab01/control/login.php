<?php

require_once(realpath(dirname(__FILE__) . '/../model/user.php'));

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 0;
    }

    $userModel = new User();
    $user = $userModel->getUser($username, $password);

    if ($user) {
        $_SESSION['perfil'] = $user['perfil'];
        $_SESSION['attempts'] = 0;
        if ($user['perfil'] === 'professor') {
            header('Location: ../view/professor.php');
        } else {
            header('Location: ../view/aluno.php');
        }
        exit();
    } else {
        $_SESSION['attempts']++;
        if ($_SESSION['attempts'] >= 3) {
            echo '<p style="color: red;">Usuário bloqueado após 3 tentativas.</p>';
        } else {
            echo '<p style="color: red;">Login ou senha incorretos.</p>';
        }
    }
}
