<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de Produto</h1>
    <table>
        <?php foreach($aProdutos as $oProduto): ?>
        <tr>
            <td>
                <?php $oProduto->nome ?>
            </td>
            <td>
                <?php $oProduto->valor ?>
            </td>
            <td>
                <?php $oProduto->descricao ?>
            </td>
            <td>
                <?php $oProduto->quantidade ?>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>