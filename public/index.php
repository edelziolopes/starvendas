<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>StarCommerce - Projeto 2º ano</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
  </head>
  <body style="background-color: #f8f9fa;">

  <nav class="navbar navbar-expand-lg" style="background-color: orange;">
    <div class="container">
      <a class="navbar-brand fw-bold text-white" href="/">
        <i class="fas fa-star"></i> StarCommerce
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="/home">
              <i class="fas fa-home"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/usuario/login">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/usuario/cadastro">
              <i class="fas fa-user-plus"></i> Cadastro
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="admDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-shield"></i> ADM
            </a>
            <ul class="dropdown-menu" aria-labelledby="admDropdown">
              <li>
          <a class="dropdown-item" href="/categoria">
            <i class="fas fa-list"></i> Categoria
          </a>
              </li>
              <li>
          <a class="dropdown-item" href="/produto">
            <i class="fas fa-box"></i> Produto
          </a>
              </li>
              <li>
          <a class="dropdown-item" href="/usuario">
            <i class="fas fa-users"></i> Usuário
          </a>
              </li>
              <li>
          <a class="dropdown-item" href="/endereco">
            <i class="fas fa-map-marker-alt"></i> Endereço
          </a>
              </li>
              <li>
          <a class="dropdown-item" href="/carrinho">
            <i class="fas fa-shopping-cart"></i> Carrinho
          </a>
              </li>
              <li>
          <a class="dropdown-item" href="/compra">
            <i class="fas fa-credit-card"></i> Compra
          </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
    require '../Application/autoload.php';
    use Application\core\App;
    use Application\core\Controller;
    $app = new App();
  ?>

  <footer class="text-white py-3 mt-5" style="background-color: orange;">
    <div class="container text-center">
      &copy; 2025 StarCommerce. Todos os direitos reservados.
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
  
  </body>
</html>
