<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Compras
{
  public static function salvar($carrinho, $produto, $quantidade)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'INSERT INTO tb_compras 
        (id_carrinho, id_produto, quantidade) 
        VALUES (:CARRINHO, :PRODUTO, :QUANTIDADE)',
        array(
          ':CARRINHO' => $carrinho,
          ':PRODUTO' => $produto,
          ':QUANTIDADE' => $quantidade
          )                                                           
    );
    return $result->rowCount();
  }
  public static function excluir($id)
  {
    $conn = new Database();
    $result = $conn->executeQuery(
        'DELETE FROM tb_compras WHERE id=:ID',
        array(':ID' => $id)
    );
    return $result->rowCount();
  }
  public static function listarTudo()
  {
      $conn = new Database();
      $result = $conn->executeQuery('SELECT
                                      c.*,
                                      p.nome AS nome_produto,
                                      p.imagem AS imagem_produto
                                    FROM
                                      tb_compras AS c
                                    JOIN
                                      tb_produtos AS p
                                    ON
                                      c.id_produto = p.id;
      ');
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
