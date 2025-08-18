<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Categoria</h4>
        </div>
        <div class="card-body">
            <form action="categoria/salvar" method="POST">
                
                <!-- Nome da Categoria -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome da Categoria</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da categoria" required>
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
