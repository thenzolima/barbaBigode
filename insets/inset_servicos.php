<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Serviço</title>
</head>
<body>
    <?php
        include_once('../conexao_bd.php');

        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];

        $sql = "INSERT INTO servico(descricao,preco) VALUES('$descricao','$preco')";

        if(executarComando($sql)){
            echo "<script>alert('Serviço Inserido!'); window.location.href = '../servicos.php';</script>";
        }
        else{
            echo "<script>alert('Erro na Inserção'); window.location.href = '../servicos.php';</script>";
        }
        
    ?>
</body>
</html>