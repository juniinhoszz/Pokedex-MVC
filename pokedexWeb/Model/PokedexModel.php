<?php 

namespace pokedexWeb\Model;
use pokedexWeb\DAO\PokedexDAO;

class PokedexModel
{
    public $id, $nome, $descricao, $tipo, $linkfoto;

    public $rows;

    public function save()
    {
        $dao = new PokedexDAO();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new PokedexDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PokedexDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new PokedexModel(); 

    }

    public function delete(int $id)
    {
        $dao = new PokedexDAO();

        $dao->delete($id);
    }
}