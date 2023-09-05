<?php
    $fp = fopen('dados.csv', 'r');
    $dados = [];
    while ($row = fgets($fp)) {
        $dados[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armazenamento de Cadastro</title>
    <style>
     table, tr, th, td {
            border: 1px solid #aaa;
            border-collapse: collapse;
        }
        td, th {
            padding: .5em;
        }
        tr:nth-child(even) {
            background: #f7b5e0;
        }
        table {
            margin-bottom: 1em;
        }

        .titulo, .conteudo, .tabela, .adicionar{
            text-align: center;
            align-items: center;
        }

       table {
           margin: auto;
       }
    </style>
</head>
<body>
    <div class="titulo">
    <h1>Lista de Cadastro</h1>
    <div class="tabela">
    <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        <?php foreach($dados as $linha => $row): ?>
            <?php $partes = explode(',', $row) ?>
            <tr>
                <!-- <td><?= $linha ?></td> -->
                <td><?= $partes[0] ?></td>
                <td><?= $partes[1] ?></td>
                <td>
                    <a href="delete.php?linha=<?= $linha ?>">Remover</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table><br>
    </div>
    </div>
   <div class="adicionar">
    <form action="add_cadastro.php" method="POST">
    <fieldset>
<legend>Adicionar Cadastro</legend>
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="email" placeholder="email">
        <input type="submit" value="adicionar">
        </fieldset>
    </form>
    </div>
</body>
</html>
