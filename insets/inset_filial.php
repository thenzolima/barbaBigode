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

        $descricao = $_POST['txtDescricao'];
        $localizacao = $_POST['txtLocal'];
        $responsavel = $_POST['txtResponsavel'];

        $sql = "INSERT INTO filial(descricaoF,localizacao,responsavel) VALUES('$descricao','$localizacao','$responsavel')";

        if(executarComando($sql)){
            echo "<script>alert('Filial inserida com sucesso!'); window.location.href = '../filial.php';</script>";
        }else{
            echo "<script>alert('Falha ao inserir a filial.'); window.location.href = '../filial.php';</script>";
        }
    ?>
</body>
</html>