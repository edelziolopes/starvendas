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
          'DELETE FROM tb_usuarios WHERE id=:ID',
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
    
    public static function buscarPorEmail($email)
    {
        $conn = new Database();
        $result = $conn->executeQuery(
            'SELECT id, nome, email, senha, foto FROM tb_usuarios WHERE email = :EMAIL',
            array(
                ':EMAIL' => $email
            )
        );
        return $result->fetch(PDO::FETCH_OBJ);
    }
    public static function editar($id, $nome, $email, $senha, $foto)
    {
        // 1. Inicia a query SQL e o array de parâmetros
        $sql = 'UPDATE tb_usuarios SET nome = :NOME, email = :EMAIL';
        $params = [
            ':NOME' => $nome,
            ':EMAIL' => $email,
        ];

        // 2. Adiciona a atualização de senha à query se uma nova senha foi fornecida
        if ($senha !== null) {
            $sql .= ', senha = :SENHA';
            $params[':SENHA'] = $senha;
        }

        // 3. Adiciona a atualização de foto à query se uma nova foto foi fornecida
        if ($foto !== null) {
            $sql .= ', foto = :FOTO';
            $params[':FOTO'] = $foto;
        }

        // 4. Finaliza a query com a cláusula WHERE e adiciona o ID aos parâmetros
        $sql .= ' WHERE id = :ID';
        $params[':ID'] = $id;
        $conn = new Database();
        $result = $conn->executeQuery($sql, $params);
        
        return $result->rowCount();
    }

}