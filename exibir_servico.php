<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <link rel="stylesheet" href="css/table.css">
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="" method="post">
            <div id="body">

                <h1><span>Serviços disponíveis</span></h1>
                <table>
                    <tr>
                        <th>DESCRIÇÃO</th>
                        <th>PREÇO</th>
                    </tr>
                    
                    <!-- A PARTIR DAQUI OS DADOS DA TABELA DEVEM VIR DO BANCO DE DADOS -->
                    <?php 
                        require_once 'conexao_bd.php';

                        $query = "SELECT descricao, preco FROM servico";
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row['descricao']."</td>";
                                echo "<td>"."R$".$row['preco']."</td>";
                                echo "</tr>";
                            }
                        } else{
                            echo "Nenhum Serviço registrado";
                        }
                    ?>
                </table>

            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
