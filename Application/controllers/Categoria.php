<?php

use Application\core\Controller;

class Categoria extends Controller
{
  public function index()
  {
    $this->view('categoria/index');
  }
  public function salvar()
  {
    $nome = $_POST['nome'];
    $Categorias = $this->model('Categorias');
    $Categorias::salvar($nome);
    $this->redirect('categoria/index');
  }


}
