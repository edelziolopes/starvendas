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
    $imagem = $_POST['txt_imagem'];
    $quantidade = $_POST['txt_quantidade'];
    $descricao = $_POST['txt_descricao'];

    

    $Produtos = $this->model('Produtos');
    $Produtos::salvar($categoria, $nome, $preco, $imagem, $quantidade, $descricao);
    $this->redirect('produto/index');
  }

    public function excluir($id)
  {
    $Produtos = $this->model('Produtos');
    $Produtos::excluir($id);
    $this->redirect('produto/index');
  }

}
