<!DOCTYPE html>
<!--

TRABALHO HUCK BURGUER - PROFESSORA LUANA FERNANDES (04/04/2019)

INTEGRANTES DO GRUPO:
    Thais Cassiano
    Állef
    Gabriel Granado 
    José Paiva  
    Marcelo Andrade
    Matheus Modesto 
-->
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
            <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                
                <h1>Huck Burguer</h1>
                                
                <form action="gravar.php" method="POST">
                    <h5>Dados do Cliente</h5>
                    <div class="form-group">
                        <label for="">Nome:</label><input type="text" id="inNome" name="inNome" class="form-control" required> 
                    </div>
                    <div class="form-group">
                        <label for="">Telefone:</label><input type="tel" id="inTelefone" name="inTelefone" class="form-control" required> 
                    </div>
                    <br>
                    
                    <h5>Monte seu lanche</h5>
                    <h6>Ponto da carne:</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pontoCarne" id="carneMalpassada" value="Mal passada">
                        <label class="form-check-label" for="carneMalpassada">Mal passada</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pontoCarne" id="carneAoPonto" value="Ao Ponto" checked>
                        <label class="form-check-label" for="carneAoPonto">Ao ponto</label>
                    </div>
                    
                    <h6>Pão:</h6>
                    <select name="optPao" id="optPao" class="form-control">
                        <option value="Brioche">Brioche</option>
                        <option value="Australiano">Australiano</option>
                        <option value="Integral">Integral</option>
                        <option value="Alho e orégano">Alho e orégano</option>
                        <option value="Italiano com ervas">Italiano com ervas</option>
                    </select>
                    
                    <h6>Queijo:</h6>
                    <select name="optQueijo" id="optQueijo" class="form-control">
                        <option value="Cheddar">Cheddar</option>
                        <option value="Prato">Prato</option>
                        <option value="Suíço">Suíço</option>
                        <option value="Muçarela">Muçarela</option>
                        <option value="Sem queijo">Sem queijo</option>
                    </select>
                    
                    <h6>Observações:</h6>
                    <div class="form-group">
                        <textarea name="inObservacao" id="inObservacao" rows="2" class="form-control"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success"> Cadastrar </button>
                    
                </form>
                
            </div>
            </div>
        </div>
        
        
 
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    </body>
</html>
