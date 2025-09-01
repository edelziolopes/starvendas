<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Carrinho</h4>
        </div>
        <div class="card-body">
            <form action="//salvar/" method="POST" enctype="multipart/form-data">

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
                <div class="mb-3">
                    <label for="id_usuario" class="form-label">Enderecos</label>
                    <select class="form-select" id="id_nome" name="txt_usuario" required>
                        <option value="" selected disabled>Selecione o enderecos</option>
                        <?php foreach ($data['enderecos'] as $dados): ?>
                        <option value="<?=$dados['id']?>">
                            <?=$dados['nome']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

   


                <!-- Botões -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                
            </form>
        </div>

        <h4 class="mt-4">Listar Carrinhos</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-2">
            <thead class="table-primary">
                <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Endereco</th>
                <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['carrinhos'] as $data): ?>
                <tr>
                    <td><?= htmlspecialchars($data['id']) ?></td>
                    <td><?= htmlspecialchars($data['id_usuario']) ?></td>
                    <td><?= htmlspecialchars($data['id_endereco']) ?></td>

                    <td><a href="/endereco/excluir/<?=$data['id']?>" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>



    </div>
</div>