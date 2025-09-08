<div class="container d-flex justify-content-center align-items-center mt-3">
    <div class="card shadow" style="width: 22rem;">
        <div class="card-body">
            <h5 class="card-title mb-4 text-center">Cadastro de Usuário</h5>
            <form action="/usuario/salvar" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="txt_nome" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" id="email" name="txt_email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" id="senha" name="txt_senha" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" id="foto" name="txt_foto" class="form-control" accept="image/*" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>