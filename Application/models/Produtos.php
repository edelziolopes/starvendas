<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Produtos
{
  public static function salvar($categoria, $nome, $preco, $imagem, $quantidade)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_produtos 
        (id_categoria, nome, preco, imagem, quantidade) 
        VALUES (:CATEGORIA, :NOME, :PRECO, :IMAGEM, :QUANTIDADE)',
        array(
          ':CATEGORIA' => $categoria,
          ':NOME' => $nome,
          ':PRECO' => $preco,
          ':IMAGEM' => $imagem,
          ':QUANTIDADE' => $quantidade
          )                                                           
    );
    return $result->rowCount();
  }
  public static function excluir($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'DELETE FROM tb_categorias WHERE id=:ID',
        array(':ID' => $id)
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
