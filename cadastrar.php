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

include('connection.php');
$query = "insert into predio(logradouro,bairro,referencia,condominio,edificio,codigo) values('$logradouro',
'$bairro','$referencia','$condominio', '$edificio', '$codigo')";
$queryProp = "insert into proprietario(nomeProp,nomeCorretor,tel1,tel2,preco,dataProp,endResidencial,endComercial
chaves,avaliacao,idPredio) values('.$nomeProp.','.$nomeCorretor.','.$tel1.','.$tel2.','.$preco.',
'.$dataProp.','.$res.','.$com.','.$chaves.','.$avaliacao.',LAST_INSERT_ID())";

if(mysqli_query($con,$query)){ 
    If(mysqli_query($con, $queryProp)){
        echo "cadastrado";

    }else{
        echo "not ok";
    }
}else{ 
    echo "not ok";
}






}else{ 





}



?>