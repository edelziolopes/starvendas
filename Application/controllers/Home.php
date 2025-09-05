<?php

use Application\core\Controller;

class Home extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $Produtos = $this->model('Produtos');
    $listarProd = $Produtos::listarTudo();


    $this->view('home/index', [
      'produtos' => $listarProd

    ]);
  }

}
