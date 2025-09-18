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
                                      c.*,
                                      u.nome AS nome_usuario,
                                      e.nome AS nome_endereco
                                    FROM
                                      tb_carrinhos AS c
                                    JOIN
                                      tb_usuarios AS u
                                    ON
                                      c.id_usuario = u.id
                                    JOIN
                                      tb_enderecos AS e
                                    ON
                                      c.id_endereco = e.id;
      ');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
