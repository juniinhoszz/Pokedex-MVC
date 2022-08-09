<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex Cards- Meus Pokemons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body>
    


<center><img style="margin: 10px; height: 140px;"  src="https://archives.bulbagarden.net/media/upload/4/4b/Pok%C3%A9dex_logo.png"> </img>


<center>



<?php foreach($model->rows as $item): ?>
<div class="card" style="width: 248px; margin:7px; font-size: 16px; display:inline-flex;max-width: 300px; border: solid #302f95 3px; box-shadow: 5px 5px 5px black;">
  <img src="<?= $item['linkfoto'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="color:#212121;font-size:20px"><?= $item['nome'] ?> <p style="color:#616161;font-size:18px">N°<?= $item['id'] ?></p></h5>
    <p class="card-text" style="color:#212121; text-align:justify"><?= $item['descricao'] ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="color:#212121">Tipo: <?= $item['tipo'] ?></li>
  </ul>
  <div class="card-body" style="display:inline-flex;">
  <div style="border:solid blue 1px;border-radius:15px;background-color:cyan">
    <b><a href="/pokedex/form?id=<?= $item['id'] ?>" class="card-link" style="color:darkcyan;text-decoration:none;">Editar Pokemon</a></b>
    </div>
    <div style="border:solid red 1px;border-radius:15px;background-color:#ff6961; margin-left:20px">
    <b><a href="/pokedex/delete?id=<?= $item['id'] ?>" class="card-link" style="color:red;text-decoration:none;  ">Transferir Pokemon</a></b>
    </div>
  </div>
</div>
<?php endforeach ?>

<?php if(count($model->rows) == 0): ?>
  <br>
  <div style="border:solid black 2px; border-radius:15px; height:30px; width:250px"
  <h1 align="center" style="margin: 5px; font-size:50px"><b>Nenhum Pokemon Cadastrado.</b></h1></div>
        <?php endif ?>


<div><br>
<a href="/pokedex"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Ver <b>Pokedex</b> Versão Tabela</button></a>
<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Voltar para a <b>Página Inicial</b></button></a>
<a href="/pokedex/form"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Cadastrar mais <b>Pokemons</b></button></a>
</div>
</center>
<br>


</body>
</html>