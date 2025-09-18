<?php

use Application\core\Controller;

class Produto extends Controller
{
  public function index()
  {
    $Categorias = $this->model('Categorias');
    $listarCat = $Categorias::listarTudo();

    $Produtos = $this->model('Produtos');
    $listarProd = $Produtos::listarTudo();
    
    $this->view('produto/index', [
      'categorias' => $listarCat,
      'produtos' => $listarProd,

    ]);
  }
  public function salvar()
  {
    $categoria = $_POST['txt_categoria'];
    $nome = $_POST['txt_nome'];
    $preco = $_POST['txt_preco'];
    $quantidade = $_POST['txt_quantidade'];
    $descricao = $_POST['txt_descricao'];
    $imagem = $_FILES['txt_imagem'];

    $timestamp = date('YmdHis');
    $retratoName = $timestamp . '.jpg';
    $uploadPath = '../public/uploads/produto/' . $retratoName;
    if (move_uploaded_file($imagem['tmp_name'], $uploadPath)) {

      $Produtos = $this->model('Produtos');
      $Produtos::salvar($categoria, $nome, $preco, $retratoName, $quantidade, $descricao);
      $this->redirect('produto/index');
    }
  }

    public function excluir($id)
  {
    $Produtos = $this->model('Produtos');
    $Produtos::excluir($id);
    $this->redirect('produto/index');
  }
  
  public function detalhes($id)
  {
    $Produtos = $this->model('Produtos');
    $Produtos::detalhes($id);

    $this->view('produto/detalhes', [
      'produto' => $Produtos::detalhes($id)
    ]);
  }

  public function editar()
  {
      // 1. Coleta os dados do formulário
      $id = $_POST['txt_id'];
      $id_categoria = $_POST['txt_categoria'];
      $nome = $_POST['txt_nome'];
      $descricao = $_POST['txt_descricao'];
      $preco = $_POST['txt_preco'];
      $quantidade = $_POST['txt_quantidade'];
      
      $nome_imagem = null;

      // 2. Verifica se um novo arquivo de imagem foi enviado
      if (isset($_FILES['txt_imagem']) && $_FILES['txt_imagem']['error'] == UPLOAD_ERR_OK) {
          $imagem_temp = $_FILES['txt_imagem']['tmp_name'];
          $nome_imagem = uniqid() . '-' . basename($_FILES['txt_imagem']['name']);
          $caminho_destino = 'uploads/produto/' . $nome_imagem;

          // Move o novo arquivo para a pasta de destino
          if (!move_uploaded_file($imagem_temp, $caminho_destino)) {
              $nome_imagem = null; // Falha no upload, não atualiza a imagem
          }
      }

      // 3. Carrega o model e chama o método de edição
      $Produtos = $this->model('Produtos');
      $Produtos::editar($id, $id_categoria, $nome, $descricao, $preco, $quantidade, $nome_imagem);

      // 4. Redireciona de volta para a lista de produtos
      $this->redirect('produto/index');
  }  
}
