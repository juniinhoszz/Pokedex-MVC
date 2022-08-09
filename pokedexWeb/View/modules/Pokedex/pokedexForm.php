<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex - Cadastro de Pokemons</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body style="background-color:white ;">
<div>
<form action="/pokedex/save" method="post">
    <center>
        <fieldset style="height: 453px; width:10px; margin:6%;background-color:mediumpurple; border-radius:15px; border:solid #302f95 4px;">
            

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome" ><b>Nome do Pokemon:</b></label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style=" height:20px;"/>

            <label for="descricao"><b>Descrição do Pokemon:</b></label> 
            <!--<input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:#484d50; color:white; height:60px; "/>-->
            <textarea rows="9" cols="21" maxlength="500" name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style=""><?= $model->descricao ?></textarea>

            <label for="tipo" ><b>Tipo do Pokemon:</b></label>
            <input name="tipo" id="tipo" type="text" value="<?= $model->tipo ?>" style=" height:20px;"/>
            
            <label for="linkfoto" ><b>Link da Imagem do Pokemon:</b></label>
            <input name="linkfoto" id="linkfoto" type="url" value="<?= $model->linkfoto ?>" style=" height:20px;"/>
            
            <label for="id" ><b>Numero do Pokemon:</b></label>
            <input type="text" value="#<?= $model->id ?>" name="id" disabled="" style=" height:20px;"/>
             
            

            <br>
            <button type="submit" style="background-color:#fdd02f;border: solid #302f95 4px;color:black; height:60px; width:180px; font-size:17px;color:black;border-radius:15px"><?php if(empty($model->id)): ?>Cadastrar Pokemon <?php else:?> Atualizar Pokemon<?php endif?></button>

        </fieldset></center>
    </form></div>    
    <br>
    <center>
<div><br>
<a href="/pokedexoriginal"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Ver <b>Pokedex</b> Versão Cards</button></a>
<a href="/pokedex"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Ver <b>Pokedex</b> Versão Tabela</button></a>
<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#fdd02f;border: solid #302f95 6px;color:black; border-radius:15px" >Voltar para a <b>Página Inicial</b></button></a>
</div>
<br>
</center>
 
<style>
        
        


    </style>

</body>
</html>