<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Categorias
{
  public static function salvar($nome)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_categorias (nome) VALUES (:NOME)',
        array(':NOME' => $nome)
    );
    return $result->rowCount();
  }

}
