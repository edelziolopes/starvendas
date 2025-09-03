<?php

use Application\core\Controller;

class Compra extends Controller
{
  public function index()
  {
    $Produtos = $this->model('Produtos');
    $listarProd = $Produtos::listarTudo();

    $Compras = $this->model('Compras');
    $listarCom = $Compras::listarTudo();
    
    $Carrinhos = $this->model('Carrinhos');
    $listarCar = $Carrinhos::listarTudo();


    $this->view('compra/index', [
      'produtos' => $listarProd,
      'compras' => $listarCom, 
      'carrinhos' => $listarCar

    ]);
  }
  public function salvar()
  {
    $carrinho = $_POST['txt_carrinho'];
    $produto = $_POST['txt_produto'];
    $quantidade = $_POST['txt_quantidade'];

    $Compras = $this->model('Compras');
    $Compras::salvar($carrinho, $produto, $quantidade);

    $this->redirect('compra/index');
  }
  public function excluir($id)
  {
    $Compras = $this->model('Compras');
    $Compras::excluir($id);
    $this->redirect('compra/index');
  }
}
