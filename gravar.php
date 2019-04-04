<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
        <div class="container">

            <?php

            /* 
             * Grava os dados no banco, mas ainda precisa do tratamento para não
             * regravar dados quando a página é atualizada.
             * 
             */

            $nome           = $_POST['inNome'];
            $telefone       = $_POST['inTelefone'];
            $ponto_carne    = $_POST['pontoCarne'];
            $opt_pao        = $_POST['optPao'];
            $opt_queijo     = $_POST['optQueijo'];
            $observacao     = $_POST['inObservacao'];
            
            if(!empty($nome) && !empty($telefone) && !empty($ponto_carne) && !empty($opt_pao) && !empty($opt_queijo)){
                include_once 'conexao.php';

                $query = "INSERT INTO pedidos(nome, telefone, ponto_carne, opt_pao, opt_queijo, observacao) VALUES('$nome', '$telefone', '$ponto_carne', '$opt_pao', '$opt_queijo', '$observacao')";
                if(mysqli_query($conexao, $query)){

                    echo "<p class='alert alert-danger'> $nome, seu pedido foi enviado com sucesso!"
                        ."<br> Sanduíche caprichado com as opções: Pão - $opt_pao, Carne - $ponto_carne e Queijo - $opt_queijo. </p>";

                }else{
                    echo "<p>Pedido não enviado.</p>";
                    echo mysqli_error($con);
                }

                mysqli_close($conexao);
            }else{
                echo "<p class='alert alert-danger'>Preecha todos os campos!</p>";   
            }

            ?>
            <p>
                <a href="index.php" class="btn btn-success"> Voltar </a>
            </p>
        </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>



