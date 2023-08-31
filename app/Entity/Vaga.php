<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga
{

    public $id;

    public $titulo;

    public $descricao;

    public $ativo;

    public $data;

    public function cadastrar()
    {
        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('vagas');

        echo '<pre>'; print_r($obDatabase); echo '</pre>'; exit;
        
    }
}

?>