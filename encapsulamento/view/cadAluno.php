<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <form action="../model/exibirAluno.php" method="POST">
            Aluno: <br/>
            <input type="text" name="cxnome" /> <br/>
            E-mail: <br/>
            <input type="email" name="cxemail" /> <br/>
            <input type="submit" value="Gravar">
        </form>
</body>
</html>