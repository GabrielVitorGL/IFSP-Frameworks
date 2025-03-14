<?php
    include_once "../control/dados.php";

    $gravar = new Dados;
    $gravar->setNome($_POST['cxnome']);
    $gravar->setEmail($_POST['cxemail']);

    echo "Nome: " . $gravar->getNome();
    echo "<br/>";
    echo "Email: " . $gravar->getEmail();


?>