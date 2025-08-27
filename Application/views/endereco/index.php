<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Endereco</h4>
        </div>
        <div class="card-body">
            <form action="/endereco/salvar/" method="POST" enctype="multipart/form-data">
                
                <!-- Categoria -->
                <div class="mb-3">
                    <label for="id_usuario" class="form-label">Usuário</label>
                    <select class="form-select" id="id_nome" name="txt_usuario" required>
                        <option value="" selected disabled>Selecione o usuário</option>
                        <?php foreach ($data['usuarios'] as $dados): ?>
                        <option value="<?=$dados['id']?>">
                            <?=$dados['nome']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do endereco</label>
                    <input type="text" class="form-control" id="nome" name="txt_nome" placeholder="Digite o nome do endereco" required>
                </div>
                <!-- Descrição -->
                <div class="mb-3">
                    <label for="nome" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="nome" name="txt_cep" placeholder="Digite o CEP" required>
                </div>

                <!-- Preço -->
                <div class="mb-3">
                    <label for="preco" class="form-label">Rua</label>
                    <input type="number" step="0.01" class="form-control" name="txt_rua" placeholder="Digite a rua" required>
                </div>

                <!-- Quantidade -->
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Numero</label>
                    <input type="text" class="form-control" id="quantidade" name="txt_numero"required>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                
            </form>
        </div>

        <h4 class="mt-4">Listar Enderecos</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-2">
            <thead class="table-primary">
                <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nome</th>
                <th>CEP</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['enderecos'] as $data): ?>
                <tr>
                    <td><?= htmlspecialchars($data['id']) ?></td>
                    <td><?= htmlspecialchars($data['id_usuario']) ?></td>
                    <td><?= htmlspecialchars($data['nome']) ?></td>
                    <td><?= htmlspecialchars($data['cep']) ?></td>
                    <td><?= htmlspecialchars($data['rua']) ?></td>
                    <td><?= htmlspecialchars($data['numero']) ?></td>

                    <td><a href="/endereco/excluir/<?=$data['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>



    </div>
</div>