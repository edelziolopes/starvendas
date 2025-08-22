<?php

use Application\core\Controller;

class Produto extends Controller
{
  public function index()
  {
    $Categorias = $this->model('Categorias');
    $data = $Categorias::listarTudo();
    $this->view('produto/index', ['categorias' => $data]);
  }
  public function salvar()
  {
    $categoria = $_POST['txt_categoria'];
    $nome = $_POST['txt_nome'];
    $preco = $_POST['txt_preco'];
    $imagem = $_POST['txt_imagem'];
    $quantidade = $_POST['txt_quantidade'];

    $Produtos = $this->model('Produtos');
    $Produtos::salvar($categoria, $nome, $preco, $imagem, $quantidade);
    $this->redirect('produto/index');
  }

}
