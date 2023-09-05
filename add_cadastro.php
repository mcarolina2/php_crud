<?php 
$nome = $_POST['Nome'];
$email = $_POST['Email'];

$fp = fopen('dados.csv', 'a');
fwrite($fp, $nome . ',' . $email . PHP_EOL);

header('location: index.php')
?>