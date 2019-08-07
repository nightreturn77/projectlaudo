<?php

if(isset($_POST['cadastrar'])){ 

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
$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c6 = $_POST['c6'];
$lazer = $_POST['lazer'];
$idIg = "";

include('connection.php');

$queryinfoGerais = "insert into infoGerais(idIg,lazer) values(null,'$lazer')";

if(mysqli_query($con, $queryinfoGerais)){ 
    $queryId = "select * from infoGerais where lazer = '$lazer'";
    $consultId = mysqli_query($con, $queryId); 
    $arrayId = mysqli_fetch_array($consultId); 
   $idIg = $arrayId['idIg'];
   echo $idIg;
   
   }else{ 
   echo "not ok info gerais";
   }



$queryCaracter = "insert into caracteristicas(idPt,tipo,c1,c2,c3,c4,c5,c6) values(null,'$tipo','$c1','$c2','$c3','$c4','$c5','$c6')";
$queryEnd = "insert into endereco(idPredio,logradouro,bairro,referencia,condominio,edificio,codigo,idIg,idPt) values(null,'$logradouro',
'$bairro','$referencia','$condominio', '$edificio', '$codigo','$idIg',LAST_INSERT_ID())";
$queryProp = "insert into proprietario(nomeProp,nomeCorretor,tel1,tel2,preco,dataProp,endResidencial,endComercial,
chaves,avaliacao,idPredio) values('$nomeProp','$nomeCorretor','$tel1','$tel2','$preco',
'$data','$res','$com','$chaves','$avaliacao',LAST_INSERT_ID())";



if(mysqli_query($con, $queryCaracter)){ 
    echo "passou aqui";
    if(mysqli_query($con, $queryEnd)){ 
        echo "passou aqui";
        if(mysqli_query($con, $queryProp)){ 
            echo "passou aqui";
        }else{ 
            echo "not ok";
        }
    }else{ 
        echo "not ok";
    }
}else{ 
    echo "not ok";
}






}else{ 





}



?>