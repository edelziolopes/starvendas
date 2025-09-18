<div class="container mt-4">
    <?php if (!empty($data['produto'])): ?>
        <div class="row">
            <div class="col-md-5">
                <img src="/uploads/produto/<?= htmlspecialchars($data['produto']['imagem']) ?>" class="img-fluid rounded shadow-sm" alt="<?= htmlspecialchars($data['produto']['nome']) ?>" style="height: 350px; object-fit: cover;">
            </div>
            <div class="col-md-7">
                <h6 class="text-muted"><?= htmlspecialchars($data['produto']['categoria']) ?></h6>
                <h2 class="mb-3"><?= htmlspecialchars($data['produto']['nome']) ?></h2>
                <p><?= htmlspecialchars($data['produto']['descricao']) ?></p>
                <h4 class="fw-bold text-primary mb-3">R$ <?= htmlspecialchars(number_format($data['produto']['preco'], 2, ',', '.')) ?></h4>
                <button class="btn btn-success btn-lg">Comprar</button>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-warning">Produto não encontrado.</div>
    <?php endif; ?>
</div>

