<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Usuários</h4>
        </div>
        <div class="card-body">
            <form action="/usuario/salvar" method="POST">
                
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="txt_nome" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="nome" name="txt_email" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Senha:</label>
                    <input type="text" class="form-control" id="nome" name="txt_senha" required>
                </div>
                <div class="mb-3">
                    <label for="nome" class="form-label">Foto:</label>
                    <input type="text" class="form-control" id="nome" name="txt_foto" required>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                
            </form>
        </div>


        <h4 class="mt-4">Listar Usuários</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-2">
            <thead class="table-primary">
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Foto</th>
                <th>Ação</th>
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
                    <td><a href="/usuario/excluir/<?=$dados['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>

    </div>
</div>
