<?php

namespace pokedexWeb\DAO;
use \PDO;
use pokedexWeb\Model\PokedexModel;

class PokedexDAO
{
    private $conexao;

    function __construct() 
    {
        $dsn = "mysql:host=localhost:3307;dbname=pokedex";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

    function insert(PokedexModel $model) 
    { 
        $sql = "INSERT INTO pokemons 
                (nome, descricao, tipo, linkfoto) 
                VALUES (?, ?, ?, ?)";
        

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->tipo);
        $stmt->bindValue(4, $model->linkfoto);
        
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemons ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function update(PokedexModel $model)
    {
        $sql = "UPDATE pokemons SET nome=?, descricao=?, tipo=?, linkfoto=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->tipo);
        $stmt->bindValue(4, $model->linkfoto);
        $stmt->bindValue(5, $model->id);


        $stmt->execute();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM pokemons WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("pokedexWeb\Model\PokedexModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemons WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        
        $stmt->execute();
    }
}