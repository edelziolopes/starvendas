<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Produtos</h2>
          <form action="/produto/salvar" method="POST" enctype="multipart/form-data">
            
            <!-- Categoria -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="id_categoria" class="col-form-label mb-0">
                  <i class="fas fa-list"></i> Categoria
                </label>
              </div>
              <div class="col">
                <select class="form-select" id="id_categoria" name="txt_categoria" required>
                  <option value="" selected disabled>Selecione a categoria</option>
                  <?php foreach ($data['categorias'] as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>">
                      <?= $categoria['nome'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <!-- Nome -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="nome" class="col-form-label mb-0">
                  <i class="fas fa-tag"></i> Nome
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="nome" name="txt_nome" placeholder="Digite o nome do produto" required>
              </div>
            </div>

            <!-- Descrição -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="descricao" class="col-form-label mb-0">
                  <i class="fas fa-align-left"></i> Descrição
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="descricao" name="txt_descricao" placeholder="Digite a descrição" required>
              </div>
            </div>

            <!-- Preço -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="preco" class="col-form-label mb-0">
                  <i class="fas fa-dollar-sign"></i> Preço (R$)
                </label>
              </div>
              <div class="col">
                <input type="number" step="0.01" class="form-control" id="preco" name="txt_preco" placeholder="0.00" required>
              </div>
            </div>

            <!-- Imagem -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="imagem" class="col-form-label mb-0">
                  <i class="fas fa-image"></i> Imagem
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="imagem" name="txt_imagem" required>
              </div>
            </div>

            <!-- Quantidade -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="quantidade" class="col-form-label mb-0">
                  <i class="fas fa-cubes"></i> Quantidade
                </label>
              </div>
              <div class="col">
                <input type="number" class="form-control" id="quantidade" name="txt_quantidade" min="1" required>
              </div>
            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-end gap-2">
              <a href="/produto" class="btn btn-secondary">
                Cancelar
              </a>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Salvar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Produtos -->
  <div class="row justify-content-center mt-5">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h3 class="card-title mb-4">Lista de Produtos</h3>
          <div class="table-responsive">
            <table class="table align-middle table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
                  <th scope="col"><i class="fas fa-list"></i> Categoria</th>
                  <th scope="col"><i class="fas fa-tag"></i> Nome</th>
                  <th scope="col"><i class="fas fa-align-left"></i> Descrição</th>
                  <th scope="col"><i class="fas fa-dollar-sign"></i> Preço</th>
                  <th scope="col"><i class="fas fa-image"></i> Imagem</th>
                  <th scope="col"><i class="fas fa-cog"></i> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['produtos'] as $produto): ?>
                <tr>
                  <td><?= htmlspecialchars($produto['id']) ?></td>
                  <td><?= htmlspecialchars($produto['categoria']) ?></td>
                  <td><?= htmlspecialchars($produto['nome']) ?></td>
                  <td><?= htmlspecialchars($produto['descricao']) ?></td>
                  <td>R$ <?= htmlspecialchars(number_format($produto['preco'], 2, ',', '.')) ?></td>
                  <td>
                    <img src="<?= htmlspecialchars($produto['imagem']) ?>" width="120" class="rounded shadow-sm">
                  </td>
                  <td>
                    <a href="/produto/excluir/<?= $produto['id'] ?>" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash-alt"></i> Excluir
                    </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
