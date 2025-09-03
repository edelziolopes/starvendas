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
            <a class="nav-link text-white" href="/categoria">
              <i class="fas fa-list"></i> Categoria
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/produto">
              <i class="fas fa-box"></i> Produto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/usuario">
              <i class="fas fa-user"></i> Usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/endereco">
              <i class="fas fa-map-marker-alt"></i> Endereço
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/carrinho">
              <i class="fas fa-shopping-cart"></i> Carrinho
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/compra">
              <i class="fas fa-shopping-cart"></i> Compra
            </a>
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
