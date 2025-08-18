<?php

use Application\core\Controller;

class Produto extends Controller
{
  public function index()
  {
    $this->view('produto/index');
  }
  public function salvar()
  {
    $categoria = $_POST['categoria'];
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
    $quantidade = $_POST['quantidade'];

    $Produtos = $this->model('Produtos');
    $Produtos::salvar($categoria, $produto, $preco, $imagem, $quantidade);
    $this->redirect('produto/index');
  }

}
