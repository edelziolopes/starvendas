<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Usuários</h2>
          <form action="/usuario/salvar" method="POST">

            <!-- Nome -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="nome" class="col-form-label mb-0">
                  <i class="fas fa-user"></i> Nome
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="nome" name="txt_nome" required>
              </div>
            </div>

            <!-- Email -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="email" class="col-form-label mb-0">
                  <i class="fas fa-envelope"></i> Email
                </label>
              </div>
              <div class="col">
                <input type="email" class="form-control" id="email" name="txt_email" required>
              </div>
            </div>

            <!-- Senha -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="senha" class="col-form-label mb-0">
                  <i class="fas fa-lock"></i> Senha
                </label>
              </div>
              <div class="col">
                <input type="password" class="form-control" id="senha" name="txt_senha" required>
              </div>
            </div>

            <!-- Foto -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="foto" class="col-form-label mb-0">
                  <i class="fas fa-image"></i> Foto
                </label>
              </div>
              <div class="col">
                <input type="file" class="form-control" id="foto" name="txt_foto" required>
              </div>
            </div>
            <!-- Botões -->
            <div class="d-flex justify-content-end gap-2">
              <a href="/usuario" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Salvar
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Usuários -->
  <div class="row justify-content-center mt-5">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h3 class="card-title mb-4">Lista de Usuários</h3>
          <div class="table-responsive">
            <table class="table align-middle table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
                  <th scope="col"><i class="fas fa-user"></i> Nome</th>
                  <th scope="col"><i class="fas fa-envelope"></i> Email</th>
                  <th scope="col"><i class="fas fa-lock"></i> Senha</th>
                  <th scope="col"><i class="fas fa-image"></i> Foto</th>
                  <th scope="col"><i class="fas fa-cog"></i> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['usuarios'] as $dados): ?>
                <tr>
                  <td><?= htmlspecialchars($dados['id']) ?></td>
                  <td><?= htmlspecialchars($dados['nome']) ?></td>
                  <td><?= htmlspecialchars($dados['email']) ?></td>
                  <td><?= htmlspecialchars($dados['senha']) ?></td>
                  <td><?= htmlspecialchars($dados['foto']) ?></td>
                  <td>
                    <a href="/usuario/excluir/<?= $dados['id'] ?>" class="btn btn-sm btn-danger">
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
