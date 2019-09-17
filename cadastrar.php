<?php

if (isset($_POST['cadastrar'])) {

    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $referencia = $_POST['referencia'];
    $condominio = $_POST['condominio'];
    $edificio = $_POST['edificio'];
    $codigo = $_POST['codigo'];
    $nomeProp = $_POST['nomeProp'];
    $nomeCorretor = $_POST['nomeCorretor'];
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $preco = $_POST['preco'];
    $data = $_POST['dataProp'];
    $res = $_POST['endResidencial'];
    $com = $_POST['endComercial'];
    $chaves = $_POST['chaves'];
    $avaliacao = $_POST['avaliacao'];
    $tipo = $_POST['tipo'];
    $c1 = $_POST['c1'] = (isset($_POST['c1'])) ? true : null;
    $c2 = $_POST['c2'] = (isset($_POST['c2'])) ? true : null;
    $c3 = $_POST['c3'] = (isset($_POST['c3'])) ? true : null;
    $c4 = $_POST['c4'] = (isset($_POST['c4'])) ? true : null;
    $c5 = $_POST['c5'] = (isset($_POST['c5'])) ? true : null;
    $c6 = $_POST['c6'] = (isset($_POST['c6'])) ? true : null;
    $idIg = "";


    if ($tipo == "CASA") {
        $tratarCaracter = 1;
    } else if ($tipo == "APARTAMENTO") {
        $tratarCaracter = 2;
    } else if ($tipo == "TERRENO") {
        $tratarCaracter = 3;
    } else {
        $tratarCaracter = 4;
    }

    switch ($tratarCaracter) {
        case 1:
            $c1 = "Linear";
            $c2 = "Frente";
            $c3 = "Duplex";
            $c4 = "Vila";
            $c5 = "Triplex";
            $c6 = "Cond.";
            break;
        case 2:
            $c1 = "Padrão";
            $c2 = "Duplex";
            $c3 = "Cobertura";
            break;
        case 3:
            $c1 = "Uni - Familiar";
            $c1 = "Bi - Familiar";
            $c1 = "Multi - Familiar";
            break;
        case 4:
            $c1 = "Frente";
            $c2 = "Jirau";
            $c3 = "Galeria";
            $c4 = "Loja";
            $c5 = "Sala";
            $c6 = "Galpão";
            break;
    }

    //informações gerais 
    $ocupacao = $_POST['ocupacao'];
    $vCondominio = $_POST['valorCondominio'];
    $idadeConst = $_POST['idadeConst'];
    $habit = $_POST['habit'];
    $construtora = $_POST['nomeConstrutora'];
    $valorIptu = $_POST['valorIptu'];
    $inscIptu = $_POST['inscIptu'];
    $descricaoGeral = $_POST['descricaoGeral'];
    $fachada = $_POST['fachada'];
    $tamanhoTerreno = $_POST['tamanhoTerreno'];
    $centroTerreno = $_POST['centroTerreno'];
    $vagasD = $_POST['vagasD'];
    $vagasC = $_POST['vagasC'];
    $lazer = $_POST['lazer'];
    $beneficios = $_POST['beneficios'];
    //(ocupacao,valorCondominio,idadeConst,habit,nomeConstrutora,valorIptu,inscIptu,descricaoGeral,fachada,tamanhoTerreno
    //centroTerreno,vagasD,vagasC,lazer,beneficios)



    //documentação 

    $titulo = $_POST['titulo'];
    $rgi = $_POST['rgi'];
    $planta = $_POST['planta'];
    $cedae = $_POST['cedae'];
    $txIncendio = $_POST['txIncendio'];



    include('connection.php');

    /*$queryinfoGerais = "insert into infoGerais(idIg,lazer) values(null,'$lazer')";

    if (mysqli_query($con, $queryinfoGerais)) {
        $queryId = "select * from infoGerais where lazer = '$lazer'";
        $consultId = mysqli_query($con, $queryId);
        $arrayId = mysqli_fetch_array($consultId);
        $idIg = $arrayId['idIg'];
    } else {
        echo "not ok info gerais";
    }*/



    //gravando informações da documentação no banco

    $queryDoc = "insert into documentacao(titulo,rgi,planta,cedae,txIncendio)
    values('$titulo','$rgi','$planta','$cedae','$txIncendio')";

    if (mysqli_query($con, $queryDoc)) {
        echo "ok documentação<br>";
    } else {
        echo "erro documentação<br>";
    }

    //Pegando id do Documento
    $queryDoc2 = "select * from documentacao where titulo = '$titulo' and rgi = '$rgi'";
    $queryDoc2Envio = mysqli_query($con, $queryDoc2);
    $doc2Array = mysqli_fetch_array($queryDoc2Envio);

    $idDoc = $doc2Array['idDoc'];


    $querygerais = "insert into infogerais(ocupacao,valorCondominio,idadeConst,habit,nomeConstrutora,
    valorIptu,inscIptu,descricaoGeral,fachada,tamanhoTerreno,
centroTerreno,vagasD,vagasC,lazer,beneficios) values('$ocupacao','$vCondominio','$idadeConst','$habit',
'$construtora','$valorIptu','$inscIptu','$descricaoGeral',
'$fachada','$tamanhoTerreno','$centroTerreno','$vagasD','$vagasC','$lazer','$beneficios')";

    if (mysqli_query($con, $querygerais)) {
        echo "ok infogerais <br>";
    } else {
        echo "erro infogerais <br>";
    }

    $queryCaracter = "insert into caracteristicas(idPt,tipo,c1,c2,c3,c4,c5,c6) 
        values(null,'$tipo','$c1','$c2','$c3','$c4','$c5','$c6')";

    if (mysqli_query($con, $queryCaracter)) {
        echo "ok caracteristicas<br>";
    } else {
        echo "erro caracteristicas<br>";
    }
    $pegandoIdGerais = "select idIg from infogerais where descricaoGeral = '$descricaoGeral'";
    $enviando = mysqli_query($con, $pegandoIdGerais);
    $pegando = mysqli_fetch_array($enviando);
    $idIg = $pegando['idIg'];

    $queryEnd = "insert into endereco(idPredio,logradouro,bairro,referencia,condominio,edificio,codigo,idIg,idDoc,idPt) 
    values(null,'$logradouro',
'$bairro','$referencia','$condominio', '$edificio', '$codigo','$idIg', '$idDoc',LAST_INSERT_ID())";

    if (mysqli_query($con, $queryEnd)) {
        echo "ok endereco<br>";
    } else {
        echo "erro endereco<br>";
    }


    $queryProp = "insert into proprietario(nomeProp,nomeCorretor,tel1,tel2,preco,dataProp,endResidencial,endComercial,
chaves,avaliacao,idPredio) values('$nomeProp','$nomeCorretor','$tel1','$tel2','$preco',
'$data','$res','$com','$chaves','$avaliacao',LAST_INSERT_ID())";

    if (mysqli_query($con, $queryProp)) {
        echo "ok proprietário";
    } else {
        echo "erro proprietario";
    }


    /*if (mysqli_query($con, $querygerais)) {
        echo "ok";
    } else {
        echo 'not okt';
        $ocupacaos = "s";
        $teste = "insert into infogerais(ocupacao) values('$ocupacaos')";
        if (mysqli_query($con, $teste)) {
            echo "ok";
        } else {
            echo "not ok 2";
        }
    }*/
} else { }
