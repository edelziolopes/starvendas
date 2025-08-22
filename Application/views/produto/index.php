<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Produto</h4>
        </div>
        <div class="card-body">
            <form action="/produto/salvar/" method="POST" enctype="multipart/form-data">
                
                <!-- Categoria -->
                <div class="mb-3">
                    <label for="id_categoria" class="form-label">Categoria</label>
                    <select class="form-select" id="id_categoria" name="txt_categoria" required>
                        <option value="" selected disabled>Selecione a categoria</option>
                        <?php foreach ($data['categorias'] as $categoria): ?>
                        <option value="<?=$categoria['id']?>">
                            <?=$categoria['nome']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="txt_nome" placeholder="Digite o nome do produto" required>
                </div>

                <!-- Preço -->
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço (R$)</label>
                    <input type="number" step="0.01" class="form-control" id="preco" name="txt_preco" placeholder="0.00" required>
                </div>

                <!-- Imagem -->
                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem do Produto</label>
                    <input type="text" class="form-control" id="imagem" name="txt_imagem" accept="image/*" required>
                </div>

                <!-- Quantidade -->
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="txt_quantidade" min="1" required>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                
            </form>
        </div>

        <h4 class="mt-4">Listar Produtos</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-2">
            <thead class="table-primary">
                <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['produtos'] as $data): ?>
                <tr>
                    <td><?= htmlspecialchars($data['id']) ?></td>
                    <td><?= htmlspecialchars($data['id_categoria']) ?></td>
                    <td><?= htmlspecialchars($data['nome']) ?></td>
                    <td><?= htmlspecialchars($data['preco']) ?></td>
                    <td><?= htmlspecialchars($data['imagem']) ?></td>
                    <td><a href="/produto/excluir/<?=$data['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>



    </div>
</div>