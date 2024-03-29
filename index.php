<?php 

include('header.php');

?>

        <form method="post" action="cadastrar.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="inputBairo" placeholder="ex: Realengo">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCod">Código</label>
                    <input type="number" name="codigo" class="form-control" id="inputCod" placeholder="Digite o código">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" name="logradouro" class="form-control" id="inputAddress"
                        placeholder="ex: Travessa Coxim, 55">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress2">Ponto de Referência</label>
                    <input type="text" name="referencia" class="form-control" id="inputAddress2"
                        placeholder="ex: Próximo ao banco do Brasil">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCond">Condomínio</label>
                    <input type="text" name="condominio" class="form-control" id="inputCond">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEdi">Edifício</label>
                    <input type="text" name="edificio" class="form-control" id="inputEdi">
                </div>
                <!-- Checkboxes -->
                <div class="col-md-2">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios1"
                            value="CASA" name="tipo"/>
                        <label class="form-check-label" for="exampleRadios1" > CASA</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Linear" name='c1' class="custom-control-input" id="customCheckc1">
                        <label class="custom-control-label" for="customCheckc1">Linear</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Frente"  name='c2' class="custom-control-input" id="customCheckc2">
                        <label class="custom-control-label" for="customCheckc2">Frente</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Duplex"  name='c3' class="custom-control-input" id="customCheckc3">
                        <label class="custom-control-label" for="customCheckc3">Duplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Vila"  name='c4' class="custom-control-input" id="customCheckc4">
                        <label class="custom-control-label" for="customCheckc4">Vila</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Triplex"  name='c5' class="custom-control-input" id="customCheckc5">
                        <label class="custom-control-label" for="customCheckc5">Triplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Cond."  name='c6' class="custom-control-input" id="customCheckc6">
                        <label class="custom-control-label" for="customCheckc6">Cond.</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios1"
                            value="APARTAMENTO" name='tipo' >
                        <label class="form-check-label" for="exampleRadios1">APARTAMENTO</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Padrão" name='c1' class="custom-control-input" id="customCheckap1">
                        <label class="custom-control-label" for="customCheckap1">Padrão</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Duplex" name='c2'class="custom-control-input" id="customCheckap2">
                        <label class="custom-control-label" for="customCheckap2">Duplex</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Cobertura" name='c3' class="custom-control-input" id="customCheckap3">
                        <label class="custom-control-label" for="customCheckap3">Cobertura</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios1"
                            value="TERRENO" name='tipo' >
                        <label class="form-check-label" for="exampleRadios1">TERRENO</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Uni-Familiar" name='c1' class="custom-control-input" id="customCheckt1">
                        <label class="custom-control-label" for="customCheckt1">Uni - Familiar</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Bi-Familiar" name='c2' class="custom-control-input" id="customCheckt2">
                        <label class="custom-control-label" for="customCheckt2">Bi- Familiar</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Multi-Familiar" name='c3' class="custom-control-input" id="customCheckt3">
                        <label class="custom-control-label" for="customCheckt3">Multi - Familiar</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="exampleRadios1"
                            value="COMERCIAL" name='tipo' >
                        <label class="form-check-label" for="exampleRadios1">COMERCIAL</label>
                        <hr>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Frente" name='c1' class="custom-control-input" id="customCheckcom2">
                        <label class="custom-control-label" for="customCheckcom2">Frente</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Jirau" name='c2' class="custom-control-input" id="customCheckcom3">
                        <label class="custom-control-label" for="customCheckcom3">Jirau</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Galeria" name='c3' class="custom-control-input" id="customCheckcom4">
                        <label class="custom-control-label" for="customCheckcom4">Galeria</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Loja" name='c4' class="custom-control-input" id="customCheckcom5">
                        <label class="custom-control-label" for="customCheckcom5">Loja</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Sala" name='c5' class="custom-control-input" id="customCheckcom5">
                        <label class="custom-control-label" for="customCheckcom5">Sala</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="Galpão" name='c6' class="custom-control-input" id="customCheckcom5">
                        <label class="custom-control-label" for="customCheckcom5">Galpão</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <p class="text-center">INFORMAÇÕES GERAIS</p>
                    <hr>
                </div>
                <div class=" col-md-2">
                    <label class="" for="inlineFormCustomSelectPref">Em ocupação</label>
                    <select name="ocupacao" class="custom-select" id="inlineFormCustomSelectPref">
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
                <div class=" col-md-2">
                    <div class="form-group">
                        <label for="inputvCod">Valor do Condomínio</label>
                        <input name="valorCondominio"type="number" class="form-control" id="inputvCond" placeholder="Digite o valor">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="inputConst">Idade da construção</label>
                        <input name="idadeConst" type="date" class="form-control" id="inputConst" placeholder="Digite a idade">
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="" for="inlineFormCustomSelectPref">Possui habita-se?</label>
                    <select name="habit" class="custom-select" id="inlineFormCustomSelectPref">
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputconstru">Construtora</label>
                        <input name="nomeConstrutora" type="text" class="form-control" id="inputconstru"
                            placeholder="Digite o nome da construtora">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="inputvar">Valor do IPTU</label>
                        <input name="valorIptu" type="number" class="form-control" id="inputvar" placeholder="Digite o valor">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="inputinsciptu">Inscrição do IPTU</label>
                        <input name="inscIptu" type="number" class="form-control" id="inputinsciptu" placeholder="Digite a inscrição">
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Descrição geral de cômodos: </label>
                    <textarea name="descricaoGeral" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Digite aqui"></textarea>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputdes">Tipo de fachada</label>
                        <input name="fachada" type="text" class="form-control" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputdes">Tamanho do terreno</label>
                        <input name="tamanhoTerreno" type="number" class="form-control" id="inputdes" placeholder="">
                    </div>
                    <div class="col-md-4">
                        <label class="" for="inlineFormCustomSelectPref">Casa em centro de terreno?</label>
                        <select name="centroTerreno" class="custom-select" id="inlineFormCustomSelectPref">
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Nº de vagas Descobertas</label>
                        <input name="vagasD" type="number" class="form-control" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Nº de vagas Cobertas</label>
                        <input name="vagasC" type="number" class="form-control" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Itens de lazer: </label>
                        <textarea name="lazer" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Digite aqui"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Beneficios do Condomínio: </label>
                        <textarea name="beneficios" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Digite aqui"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <p class="text-center">DOCUMENTAÇÃO</p>
                    <hr>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titulo">Título</label>
                        <select name="titulo" class="custom-select" id="titulo">
                            <option value="Compra e venda">Compra e Venda</option>
                            <option value="Promessa de compra e venda">Promessa de compra e venda</option>
                            <option value="Sessão de direitos aquisitivos">Sessão de direitos aquisitivos</option>
                            <option value="Promessa de sessão de direitos aquisitivos">Promessa de sessão de direitos aquisitivos</option>
                            <option value="Compra, venda e sessão">Compra, venda e sessão</option>
                            <option value="Dação em pagamento">Dação em pagamento</option>
                            <option value="Doação">Doação</option>
                            <option value="Instrumento particular de compra e venda">Instrumento particular de compra e venda</option>
                        </select>                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">RGI</label>
                        <input type="text" class="form-control" name="rgi" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Planta</label>
                        <input type="text" class="form-control" name="planta" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">CEDAE</label>
                        <input type="text" class="form-control" name="cedae" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">TX INCENDIO</label>
                        <input type="text" class="form-control" name="txIncendio" id="inputdes" placeholder="">
                    </div>

                </div>
                <div class="col-md-12">
                    <hr>
                    <p class="text-center">DADOS DO PROPRIETÁRIO</p>
                    <hr>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputdes">Nome</label>
                        <input type="text" name="nomeProp" class="form-control" id="inputdes"
                            placeholder="Digite o nome do proprietário">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Endereço Residencial</label>
                        <input type="text" name="endResidencial" class="form-control" id="inputdes"
                            placeholder="ex: Rua Silva Cardoso">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Endereço Comercial</label>
                        <input type="text" name="endComercial" class="form-control" id="inputdes"
                            placeholder="Rua Silva Cardoso">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Tel:</label>
                        <input type="text" name="tel1" class="form-control" id="inputdes" placeholder="ex: 2135558585">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Tel 2:</label>
                        <input type="text" name="tel2" class="form-control" id="inputdes" placeholder="ex: 2135558585">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="chaves">Chaves com</label>
                        <select name="chaves" class="custom-select" id="chaves">
                            <option value="Proprietário">Proprietário</option>
                            <option value="Escritório">Escritório</option>
                        </select>                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Preço solicitado pelo proprietário</label>
                        <input type="number" name="preco" class="form-control" id="inputdes"
                            placeholder="Digite o preço">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">Avaliação</label>
                        <input type="number" name="avaliacao" class="form-control" id="inputdes" placeholder="R$">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputdes">DATA</label>
                        <input type="date" name="dataProp" class="form-control" id="inputdes" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="corretor">Corretor</label>
                        <select name="nomeCorretor" class="custom-select" id="corretor">
                            <option value="Marcos">Marcos</option>
                            <option value="Empresa">Empresa</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="cadastrar">Gerar Laudo</button>
        </form>
    </div>







    </div>


    <?php 

    include('footer.php');



    ?> 