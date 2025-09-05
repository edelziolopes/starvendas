<div class="container mt-4">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($data['produtos'] as $produto): ?>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?= htmlspecialchars($produto['imagem']) ?>" class="card-img-top" alt="<?= htmlspecialchars($produto['nome']) ?>" style="height: 180px; object-fit: cover;">
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($produto['categoria']) ?></h6>
            <h5 class="card-title"><?= htmlspecialchars($produto['nome']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($produto['descricao']) ?></p>
          </div>
          <div class="card-footer d-flex justify-content-between align-items-center">
            <span class="fw-bold text-primary">R$ <?= htmlspecialchars(number_format($produto['preco'], 2, ',', '.')) ?></span>
            <a href="/produto/detalhes/<?= htmlspecialchars($produto['id']) ?>" class="btn btn-sm btn-success">Comprar</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>


