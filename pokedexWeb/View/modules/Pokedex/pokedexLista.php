<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Seus Pokemons</title>
</head>
<body>
<h1 align="center" >Seus Pokemons</h1>

<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
        <th style="color:#212121    ">Editar​</th>
        <th style="color:#616161">Número</th>
        <th style="color:#212121">Nome</th>
        <th style="color:#212121">Descrição</th>
        <th style="color:#212121">Tipo</th>
        <th style="color:red; font-size:15px">Transferir Pokemon</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a style="text-decoration: none; color:#30a7d7;" href="/pokedex/form?id=<?= $item['id'] ?>">✏️​</a></td>
        <td style="color:#616161"><b>#<?= $item['id'] ?></b></td>
        <td style="color:#212121"><b><?= $item['nome'] ?></b></td>
        <td style="text-decoration: none; color:#212121;"><b> <?= $item['descricao'] ?> </b></td>
        <td style="color:indigo"><b><?= $item['tipo'] ?></b></td>
        <td> <a style="color:red; text-decoration: none;" href="/pokedex/delete?id=<?= $item['id'] ?>"><b> Tranferir</b> </a>  </td>
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="10"><b  style="font-size: 30px;">Nenhum Pokemon foi encontrado.</b></td>
            </tr>
        <?php endif ?>

</table>
<center>
<div><br>
<a href="/pokedexoriginal"><button style="height: 85px; width:350px; font-size:25px; background-color:#E3350D;border: 1 solid black;color:white; border-radius:15px" >Ver <b>Pokedex</b> Versão Cards</button></a>
<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#E3350D;border: 1 solid black;color:white; border-radius:15px" >Voltar a Página Inicial</button></a>
<a href="/pokedex/form"><button style="height: 85px; width:350px; font-size:25px; background-color:#E3350D;border: 1 solid black;color:white; border-radius:15px" >Cadastrar mais <b>Pokemons</b></button></a>
</div>
</center>
<br>
<br>
<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        
    }
    h1{
        font-size: 35;
    }
    body{
        font-family: "Flexo-Medium",arial,sans-serif;
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
</body>
</html>
