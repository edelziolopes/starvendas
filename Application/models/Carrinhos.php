<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Carrinhos
{
  public static function salvar($usuario, $endereco)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_carrinhos 
        (id_usuario, id_endereco) 
        VALUES (:USUARIO, :ENDERECO)',
        array(
          ':USUARIO' => $usuario,
          ':ENDERECO' => $endereco,
          )                                                           
    );
    return $result->rowCount();
  }
  public static function excluir($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'DELETE FROM tb_carrinhos WHERE id=:ID',
        array(':ID' => $id)
    );
    return $result->rowCount();
  }
  public static function listarTudo()
  {
      $conn = new Database();
      $result = $conn->executeQuery('SELECT
      *
      FROM tb_carrinhos      
      ');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
