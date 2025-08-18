<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Produto</h4>
        </div>
        <div class="card-body">
            <form action="salvar_produto.php" method="POST" enctype="multipart/form-data">
                
                <!-- Categoria -->
                <div class="mb-3">
                    <label for="id_categoria" class="form-label">Categoria</label>
                    <select class="form-select" id="id_categoria" name="id_categoria" required>
                        <option value="" selected disabled>Selecione a categoria</option>
                        <option value="1">Eletrônicos</option>
                        <option value="2">Roupas</option>
                        <option value="3">Alimentos</option>
                    </select>
                </div>

                <!-- Nome -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do produto" required>
                </div>

                <!-- Preço -->
                <div class="mb-3">
                    <label for="preco" class="form-label">Preço (R$)</label>
                    <input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="0.00" required>
                </div>

                <!-- Imagem -->
                <div class="mb-3">
                    <label for="imagem" class="form-label">Imagem do Produto</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
                </div>

                <!-- Quantidade -->
                <div class="mb-3">
                    <label for="quantidade" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" required>
                </div>

                <!-- Botões -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary me-2">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>