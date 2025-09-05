<?php

use Application\core\Controller;

class Usuario extends Controller
{
  public function index()
  {
    $Usuarios = $this->model('Usuarios');
    $data = $Usuarios::listarTudo();
    $this->view('usuario/index', ['usuarios' => $data]);
  }
  public function salvar()
  {
    $nome = $_POST['txt_nome'];
    $email = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $foto = null;

    if (isset($_FILES['txt_foto']) && $_FILES['txt_foto']['error'] === UPLOAD_ERR_OK) {
      $uploadDir = '../public/uploads/foto/';
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }
      $fileName = uniqid() . '_' . basename($_FILES['txt_foto']['name']);
      $filePath = $uploadDir . $fileName;
      if (move_uploaded_file($_FILES['txt_foto']['tmp_name'], $filePath)) {
        $foto = $filePath;
      }
    }

    $Usuarios = $this->model('Usuarios');
    $Usuarios::salvar($nome, $email, $senha, $foto);
    $this->redirect('usuario/index');
  }
  public function excluir($id)
  {
    $Usuarios = $this->model('Usuarios');
    $Usuarios::excluir($id);
    $this->redirect('usuario/index');
  }
  public function login()
  {
    if (!isset($_POST['txt_email']) || !isset($_POST['txt_senha'])) {
      $this->view('usuario/login');
      return;
    }
    
    $email = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    $Usuarios = $this->model('Usuarios');
    $Usuarios::login($email, $senha);
    $this->redirect('home/index');
  }
  public function cadastro()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nome = $_POST['txt_nome'];
      $email = $_POST['txt_email'];
      $senha = $_POST['txt_senha'];
      $foto = $_POST['txt_foto'] ?? null;

      $Usuarios = $this->model('Usuarios');
      $Usuarios::salvar($nome, $email, $senha, $foto);

      $this->redirect('usuario/login');
      return;
    }
    $this->view('usuario/cadastro');
  }

}
