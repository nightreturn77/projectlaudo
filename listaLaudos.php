<?php
include('header.php');


?>


<div class="container">

    <table class="table">
        <thead>
            <tr>

                <th scope="col">Nome do Proprietário</th>
                <th scope="col">Endereço do Imóvel</th>
                <th scope="col">Data da avalição</th>

            </tr>
        </thead>


        <tbody>

            <?php
include('connection.php');

$query = "select * from proprietario X, endereco Y where x.idpredio = y.idPredio "; 
$enviando = mysqli_query($con, $query);

while($pegando = mysqli_fetch_array($enviando)){ 
$nome = $pegando['nomeProp'];
$endereco = $pegando['logradouro'];
$data = $pegando['dataProp'];
echo "
<tr>


<td>$nome</td>
<td>$endereco</td>
<td>$data</td>




</tr>




";



}




            ?>





        </tbody>





    </table>
















</div>


<?php


include('footer.php');


?>