<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Carrinho</h2>
          <form action="/carrinho/salvar" method="POST">

            <!-- Usuário -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="id_usuario" class="col-form-label mb-0">
                  <i class="fas fa-user"></i> Usuário
                </label>
              </div>
              <div class="col">
                <select class="form-select" id="id_usuario" name="txt_usuario" required>
                  <option value="" selected disabled>Selecione o usuário</option>
                  <?php foreach ($data['usuarios'] as $dados): ?>
                    <option value="<?= $dados['id'] ?>"><?= $dados['nome'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <!-- Endereço -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="id_endereco" class="col-form-label mb-0">
                  <i class="fas fa-map-marker-alt"></i> Endereço
                </label>
              </div>
              <div class="col">
                <select class="form-select" id="id_endereco" name="txt_endereco" required>
                  <option value="" selected disabled>Selecione o endereço</option>
                  <?php foreach ($data['enderecos'] as $dados): ?>
                    <option value="<?= $dados['id'] ?>"><?= $dados['nome'] ?></option>
                  <?php endforeach; ?>
                </select>
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
          <h3 class="card-title mb-4">Lista de Carrinhos</h3>
          <div class="table-responsive">
            <table class="table align-middle table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
                  <th scope="col"><i class="fas fa-user"></i> Usuário</th>
                  <th scope="col"><i class="fas fa-map-marker-alt"></i> Endereço</th>
                  <th scope="col"><i class="fas fa-cog"></i> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['carrinhos'] as $dados): ?>
                <tr>
                  <td><?= htmlspecialchars($dados['id']) ?></td>
                  <td><?= htmlspecialchars($dados['id_usuario']) ?></td>
                  <td><?= htmlspecialchars($dados['id_endereco']) ?></td>
                  <td>
                    <a href="/carrinho/excluir/<?= $dados['id'] ?>" class="btn btn-sm btn-danger">
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
