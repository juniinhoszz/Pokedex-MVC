<?php

namespace pokedexWeb\PokedexController;
use pokedexWeb\Model\PokedexModel;
use pokedexWeb\DAO\PokedexDAO;

class PokedexController
{
    public static function index() 
    {

        $model = new PokedexModel();
        $model->getAllRows();

        
        include 'View/modules/Pokedex/pokedexLista.php';
    }

    public static function indexOriginal() 
    {

        $model = new PokedexModel();
        $model->getAllRows();

        
        include 'View/modules/Pokedex/pokedexListaOriginal.php';
    }

    public static function form()
    {

        $model = new PokedexModel;

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
            
        include 'View/modules/Pokedex/pokedexForm.php';
    }

    public static function save() 
    {
        $model = new PokedexModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->descricao = $_POST['descricao'];
        $model->tipo = $_POST['tipo'];
        $model->linkfoto = $_POST['linkfoto'];
        
        
        $model->save(); 

        header("Location: /pokedexoriginal"); 
    }

    public static function delete()
    {
        $model = new PokedexDAO();

        $model->delete( (int) $_GET['id'] );

        header("Location: /pokedexoriginal");
    }
}