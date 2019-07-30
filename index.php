<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Laudo Imob</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Caselli Laudo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" class="form-control" id="inputBairo" placeholder="ex: Realengo">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCod">Código</label>
                    <input type="number" class="form-control" id="inputCod" placeholder="Digite o código">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="ex: Travessa Coxim, 55">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress2">Ponto de Referência</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="ex: Próximo ao banco do Brasil">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCond">Condomínio</label>
                    <input type="text" class="form-control" id="inputCond">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEdi">Edifício</label>
                    <input type="text" class="form-control" id="inputEdi">
                </div>
                <!-- Checkboxes -->
                <div class="col-md-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">CASA</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc1">
                        <label class="custom-control-label" for="customCheckc1">Linear</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc2">
                        <label class="custom-control-label" for="customCheckc2">Frente</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc3">
                        <label class="custom-control-label" for="customCheckc3">Duplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc4">
                        <label class="custom-control-label" for="customCheckc4">Vila</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc5">
                        <label class="custom-control-label" for="customCheckc5">Triplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckc6">
                        <label class="custom-control-label" for="customCheckc6">Cond.</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">APARTAMENTO</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckap1">
                        <label class="custom-control-label" for="customCheckap1">Convencional</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckap2">
                        <label class="custom-control-label" for="customCheckap2">Flat</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckap3">
                        <label class="custom-control-label" for="customCheckap3">Residencia c/ Serv</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">COBERTURA</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcob1">
                        <label class="custom-control-label" for="customCheckcob1">Linear</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcob2">
                        <label class="custom-control-label" for="customCheckcob2">Duplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcob3">
                        <label class="custom-control-label" for="customCheckcob3">Triplex</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">TERRENO</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckt1">
                        <label class="custom-control-label" for="customCheckt1">Uni - Familiar</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckt2">
                        <label class="custom-control-label" for="customCheckt2">Bi- Familiar</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckt3">
                        <label class="custom-control-label" for="customCheckt3">Multi - Familiar</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">COMERCIAL</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcom2">
                        <label class="custom-control-label" for="customCheckcom2">Frente</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcom3">
                        <label class="custom-control-label" for="customCheckcom3">Jirau</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcom4">
                        <label class="custom-control-label" for="customCheckcom4">Galeria</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheckcom5">
                        <label class="custom-control-label" for="customCheckcom5">Shop</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <p class="text-center">INFORMAÇÕES GERAIS</p>
                    <hr>
                </div>
                <div>
                    <label class="" for="inlineFormCustomSelectPref">Em ocupação</label>
                    <select class="custom-select" id="inlineFormCustomSelectPref">
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div>
                <div class=" col-md-2">
                    <div class="form-group">
                        <label for="inputvCod">Valor do Condomínio</label>
                        <input type="number" class="form-control" id="inputvCond" placeholder="Digite o valor">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="inputConst">Idade da construção</label>
                        <input type="number" class="form-control" id="inputConst" placeholder="Digite o valor">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>







    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>