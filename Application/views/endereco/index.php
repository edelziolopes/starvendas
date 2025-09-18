<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Cadastro de Endereços</h2>
          <form action="/endereco/salvar" method="POST">

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

            <!-- Nome do Endereço -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="nome" class="col-form-label mb-0">
                  <i class="fas fa-map-marker-alt"></i> Nome do Endereço
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="nome" name="txt_nome" placeholder="Digite o nome do endereço" required>
              </div>
            </div>

            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="cep" class="col-form-label mb-0">
                  <i class="fas fa-mail-bulk"></i> CEP
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="cep" name="txt_cep" 
                      placeholder="Digite o CEP" required maxlength="9">
              </div>
            </div>

            <!-- Rua -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="rua" class="col-form-label mb-0">
                  <i class="fas fa-road"></i> Rua
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="rua" name="txt_rua" placeholder="Digite a rua" required>
              </div>
            </div>

            <!-- Número -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="numero" class="col-form-label mb-0">
                  <i class="fas fa-home"></i> Número
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="numero" name="txt_numero" placeholder="Digite o número" required>
              </div>
            </div>

            <!-- Bairro -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="bairro" class="col-form-label mb-0">
                  <i class="fas fa-map"></i> Bairro
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="bairro" name="txt_bairro">
              </div>
            </div>

            <!-- Cidade -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="cidade" class="col-form-label mb-0">
                  <i class="fas fa-city"></i> Cidade
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="cidade" name="txt_cidade">
              </div>
            </div>

            <!-- Estado -->
            <div class="row align-items-center mb-3">
              <div class="col-auto">
                <label for="estado" class="col-form-label mb-0">
                  <i class="fas fa-flag"></i> Estado
                </label>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="estado" name="txt_estado">
              </div>
            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-end gap-2">
              <a href="/endereco" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Salvar
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Endereços -->
  <div class="row justify-content-center mt-5">
    <div class="col-12">
      <div class="card shadow rounded-4">
        <div class="card-body">
          <h3 class="card-title mb-4">Lista de Endereços</h3>
          <div class="table-responsive">
            <table class="table align-middle table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col"><i class="fas fa-id-badge"></i> ID</th>
                  <th scope="col"><i class="fas fa-user"></i> Usuário</th>
                  <th scope="col"><i class="fas fa-map-marker-alt"></i> Nome</th>
                  <th scope="col"><i class="fas fa-mail-bulk"></i> CEP</th>
                  <th scope="col"><i class="fas fa-road"></i> Rua</th>
                  <th scope="col"><i class="fas fa-home"></i> Número</th>
                  <th scope="col"><i class="fas fa-cog"></i> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['enderecos'] as $dados): ?>
                <tr>
                  <td><?= htmlspecialchars($dados['id']) ?></td>
                  <td><?= htmlspecialchars($dados['nome_usuario']) ?></td>
                  <td><?= htmlspecialchars($dados['nome_endereco']) ?></td>
                  <td><?= htmlspecialchars($dados['cep']) ?></td>
                  <td><?= htmlspecialchars($dados['rua']) ?></td>
                  <td><?= htmlspecialchars($dados['numero']) ?></td>
                  <td>
                    <a href="/endereco/excluir/<?= $dados['id'] ?>" class="btn btn-sm btn-danger">
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

<script>
  document.getElementById('cep').addEventListener('blur', function () {
    let cep = this.value.replace(/\D/g, ''); // remove caracteres não numéricos

    if (cep.length === 8) {
      fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
          if (!data.erro) {
            document.getElementById('rua').value = data.logradouro;
            document.getElementById('bairro').value = data.bairro;
            document.getElementById('cidade').value = data.localidade;
            document.getElementById('estado').value = data.uf;
          } else {
            alert('CEP não encontrado!');
          }
        })
        .catch(() => {
          alert('Erro ao buscar o CEP. Tente novamente.');
        });
    }
  });
</script>
