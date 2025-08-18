<?php

use Application\core\Controller;

class Categoria extends Controller
{
  public function index()
  {
    $Categorias = $this->model('Categorias');
    $data = $Categorias::listarTudo();
    $this->view('categoria/index', ['categorias' => $data]);
  }
  public function salvar()
  {
    $nome = $_POST['nome'];
    $Categorias = $this->model('Categorias');
    $Categorias::salvar($nome);
    $this->redirect('categoria/index');
  }


}
