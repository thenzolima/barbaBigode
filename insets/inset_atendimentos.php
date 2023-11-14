<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once('../conexao_bd.php');

        $nome = $_POST['txtNome'];
        $servico = $_POST['txtServico'];
        $filial = $_POST['txtFilial'];
        $data = $_POST['txtData'];
        $horario = $_POST['txtHorario'];

        $sql = "INSERT INTO atendimento(nome, idServico, idFilial, dataAtendimento, horario) VALUES('$nome', '$servico', '$filial', '$data', '$horario')";

        if(executarComando($sql)){
            echo "<script>alert('Seu atendimento foi feito!'); window.location.href = '../atendimento.php';</script>";
        } else{
            echo "<script>alert('Houve um erro no seu atendimento'); window.location.href = '../atendimento.php';</script>";
        }
    ?>
</body>
</html>