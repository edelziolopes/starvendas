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
    $foto = $_FILES['txt_foto'];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $timestamp = date('YmdHis');
    $retratoName = $timestamp . '.jpg';
    $uploadPath = '../public/uploads/foto/' . $retratoName;
    if (move_uploaded_file($foto['tmp_name'], $uploadPath)) {
      $Usuarios = $this->model('Usuarios');
      $Usuarios::salvar($nome, $email, $senhaHash, $retratoName);
      $this->redirect('usuario/index');
    }
  }
  public function excluir($id)
  {
    $Usuarios = $this->model('Usuarios');
    $Usuarios::excluir($id);
    $this->redirect('usuario/index');
  }
  public function entrar()
  {
    
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $email = $_POST['txt_email'];
          $senha = $_POST['txt_senha'];

          $Usuarios = $this->model('Usuarios');
          $usuario = $Usuarios::buscarPorEmail($email);

          if ($usuario && password_verify($senha, $usuario->senha)) {
              session_start();
              $_SESSION['usuario_logado'] = $usuario;
              $this->redirect('/home');
          } else {
              $this->view('usuario/entrar', ['erro' => 'Email ou senha inválidos.']);
          }
      } else {
          $this->view('usuario/entrar');
      }
  }
  public function sair()
  {
      session_start();
      session_unset();
      session_destroy();
      $this->redirect('/home');
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

      $this->redirect('usuario/entar');
      return;
    }
    $this->view('usuario/cadastro');
  }
  public function editar()
  {
      $id = $_POST['txt_id'];
      $nome = $_POST['txt_nome'];
      $email = $_POST['txt_email'];
      $senha_hash = null;
      $nome_foto = null;

      if (!empty($_POST['txt_senha'])) {
          $senha_hash = password_hash($_POST['txt_senha'], PASSWORD_DEFAULT);
      }

      if (isset($_FILES['txt_foto']) && $_FILES['txt_foto']['error'] == UPLOAD_ERR_OK) {
          $foto_temp = $_FILES['txt_foto']['tmp_name'];
          $nome_foto = uniqid() . '-' . basename($_FILES['txt_foto']['name']);
          $caminho_destino = 'uploads/foto/' . $nome_foto;

          if (!move_uploaded_file($foto_temp, $caminho_destino)) {
              $nome_foto = null;
          }
      }
      $Usuarios = $this->model('Usuarios');
      $Usuarios::editar($id, $nome, $email, $senha_hash, $nome_foto);
      $this->redirect('usuario/index');
  }  

}
