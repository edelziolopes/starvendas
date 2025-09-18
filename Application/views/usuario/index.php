<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Usuários</h2>
          <form action="/usuario/salvar" method="POST" enctype="multipart/form-data">

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
                <td><img src="/uploads/foto/<?= htmlspecialchars($dados['foto']) ?>" height="100px"></td>
                <td>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal"
                        data-id="<?= htmlspecialchars($dados['id']) ?>"
                        data-nome="<?= htmlspecialchars($dados['nome']) ?>"
                        data-email="<?= htmlspecialchars($dados['email']) ?>"
                        data-foto="/uploads/foto/<?= htmlspecialchars($dados['foto']) ?>">
                        <i class="fas fa-edit"></i> Editar
                    </button>
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


  <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-4 shadow">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Editar Usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/usuario/editar" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="edit-user-id" name="txt_id">
  
            <div class="mb-3 text-center">
              <label class="form-label">Foto Atual</label><br>
              <img id="current-user-photo" src="" alt="Foto do Usuário" class="img-thumbnail" style="max-width: 150px; margin-bottom: 10px;">
            </div>
  
            <div class="mb-3">
              <label for="edit-user-nome" class="form-label"><i class="fas fa-user"></i> Nome</label>
              <input type="text" class="form-control" id="edit-user-nome" name="txt_nome" required>
            </div>
            
            <div class="mb-3">
              <label for="edit-user-email" class="form-label"><i class="fas fa-envelope"></i> Email</label>
              <input type="email" class="form-control" id="edit-user-email" name="txt_email" required>
            </div>
            
            <div class="mb-3">
              <label for="edit-user-senha" class="form-label"><i class="fas fa-lock"></i> Nova Senha</label>
              <input type="password" class="form-control" id="edit-user-senha" name="txt_senha">
              <small class="form-text text-muted">Deixe em branco para não alterar a senha.</small>
            </div>
  
            <div class="mb-3">
              <label for="edit-user-foto" class="form-label"><i class="fas fa-image"></i> Alterar Foto</label>
              <input type="file" class="form-control" id="edit-user-foto" name="txt_foto">
            </div>
  
            <div class="d-grid gap-2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar Alterações</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Pega a referência do modal de edição de usuário
  var editUserModal = document.getElementById('editUserModal');
  
  // Adiciona um listener para o evento de "mostrar" o modal
  editUserModal.addEventListener('show.bs.modal', function (event) {
    // Identifica o botão que acionou o modal
    var button = event.relatedTarget;

    // Extrai as informações dos atributos data-* do botão
    var id = button.getAttribute('data-id');
    var nome = button.getAttribute('data-nome');
    var email = button.getAttribute('data-email');
    var fotoSrc = button.getAttribute('data-foto');

    // Seleciona os elementos de input e a imagem dentro do modal
    var modalIdInput = editUserModal.querySelector('#edit-user-id');
    var modalNomeInput = editUserModal.querySelector('#edit-user-nome');
    var modalEmailInput = editUserModal.querySelector('#edit-user-email');
    var currentUserPhoto = editUserModal.querySelector('#current-user-photo');

    // Atualiza os valores nos campos do formulário do modal
    modalIdInput.value = id;
    modalNomeInput.value = nome;
    modalEmailInput.value = email;
    currentUserPhoto.src = fotoSrc;

    // Limpa os campos de nova senha e nova foto para evitar enviar dados antigos
    editUserModal.querySelector('#edit-user-senha').value = '';
    editUserModal.querySelector('#edit-user-foto').value = '';
  });
</script>