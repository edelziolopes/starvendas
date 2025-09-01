<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Produtos
{
  public static function salvar($categoria, $nome, $preco, $imagem, $quantidade, $descricao)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_produtos 
        (id_categoria, nome, preco, imagem, quantidade, descricao) 
        VALUES (:CATEGORIA, :NOME, :PRECO, :IMAGEM, :QUANTIDADE, :DESCRICAO)',
        array(
          ':CATEGORIA' => $categoria,
          ':NOME' => $nome,
          ':PRECO' => $preco,
          ':IMAGEM' => $imagem,
          ':QUANTIDADE' => $quantidade,
          ':DESCRICAO' => $descricao
          )                                                           
    );
    return $result->rowCount();
  }
  public static function excluir($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'DELETE FROM tb_produtos WHERE id=:ID',
        array(':ID' => $id)
    );
    return $result->rowCount();
  }
  public static function listarTudo()
  {
      $conn = new Database();
      $result = $conn->executeQuery('SELECT
      p.id, p.nome, p.preco, p.imagem,
      p.quantidade, p.descricao,
      c.nome AS categoria
      FROM tb_produtos p
      JOIN tb_categorias c
      ON p.id_categoria = c.id      
      ');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
