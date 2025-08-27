<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Usuarios
{
  public static function salvar($nome, $email, $senha, $foto)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_usuarios (nome, email, senha, foto) 
         VALUES (:NOME, :EMAIL, :SENHA, :FOTO)',
        array(
          ':NOME' => $nome,
          ':EMAIL' => $email,
          ':SENHA' => $senha,
          ':FOTO' => $foto
          )
    );
    return $result->rowCount();
  }
  public static function excluir($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'DELETE FROM tb_usuario WHERE id=:ID',
        array(':ID' => $id)
    );
    return $result->rowCount();
  }
  public static function listarTudo()
  {
      $conn = new Database();
      $result = $conn->executeQuery('
      SELECT * FROM tb_usuarios');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
