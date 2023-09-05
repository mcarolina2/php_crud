<?php 
$linha = $_GET['linha'];

$fp = fopen('dados.csv', 'r');
$dados = [];
while($row = fgets($fp)){
    $dados[]= $row;
} 

$fp = fopen('dados.csv', 'w');
for ($i =0; $i < sizeof($dados); $i++) {
    if ($i != $linha) {
        fwrite($fp, $dados[$i]);
    }
}

header('location: index.php')

?>