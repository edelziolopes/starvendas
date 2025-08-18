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
  public static function listarTudo()
  {
      $conn = new Database();
      $result = $conn->executeQuery('
      SELECT * FROM tb_categorias');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
