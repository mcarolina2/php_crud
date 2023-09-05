<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];

$fp = fopen('dados.csv', 'a');
fwrite($fp, $nome . ',' . $email . PHP_EOL);

header('location: index.php')
?>