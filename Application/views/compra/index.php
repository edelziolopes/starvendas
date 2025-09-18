<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Compras</h2>
          <form action="/compra/salvar" method="POST">

            <!-- Usuário -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="id_usuario" class="col-form-label mb-0">
                  <i class="fas fa-user"></i> Carrinho
                </label>
              </div>
              <div class="col">
                <select class="form-select" id="id_usuario" name="txt_carrinho" required>
                  <option value="" selected disabled>Selecione o carrinho</option>
                  <?php foreach ($data['carrinhos'] as $dados): ?>
                    <option value="<?= $dados['id'] ?>"><?= $dados['id'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <!-- Endereço -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="id_endereco" class="col-form-label mb-0">
                  <i class="fas fa-map-marker-alt"></i> Produto
                </label>
              </div>
              <div class="col">
                <select class="form-select" id="id_endereco" name="txt_produto" required>
                  <option value="" selected disabled>Selecione o produto</option>
                  <?php foreach ($data['produtos'] as $dados): ?>
                    <option value="<?= $dados['id'] ?>"><?= $dados['nome'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="row align-items-center mt-3">
                <div class="col-auto">
                <label for="categoria" class="col-form-label mb-0">
                  <i class="fas fa-tag"></i> Quantidade
                </label>
                </div>
                <div class="col">
                <input type="number" class="form-control" id="categoria" name="txt_quantidade" required>
                </div>
              </div>

            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-end gap-2">
              <a href="/carrinho" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Salvar
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Carrinhos -->
  <div class="row justify-content-center mt-5">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h3 class="card-title mb-4">Lista de Compras</h3>
          <div class="table-responsive">
            <table class="table align-middle table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
                  <th scope="col"><i class="fas fa-user"></i> Carrinho</th>
                  <th scope="col"><i class="fas fa-map-marker-alt"></i> Produto</th>
                  <th scope="col"><i class="fas fa-map-marker-alt"></i> Quantidade</th>
                  <th scope="col"><i class="fas fa-image"></i> Imagem</th>
                  <th scope="col"><i class="fas fa-cog"></i> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['compras'] as $dados): ?>
                <tr>
                  <td><?= htmlspecialchars($dados['id']) ?></td>
                  <td><?= htmlspecialchars($dados['id_carrinho']) ?></td>
                  <td><?= htmlspecialchars($dados['nome_produto']) ?></td>
                  <td><?= htmlspecialchars($dados['quantidade']) ?></td>
                  <td><img src="<?= htmlspecialchars($dados['imagem_produto']) ?>" alt="<?= htmlspecialchars($dados['nome_produto']) ?>" class="img-fluid" style="max-width: 100px;"></td>
                  <td>
                    <a href="/compra/excluir/<?= $dados['id'] ?>" class="btn btn-sm btn-danger">
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
