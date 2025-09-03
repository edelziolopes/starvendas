<div class="container d-flex justify-content-center align-items-center mt-3">
  <div class="card shadow" style="width: 22rem;">
    <div class="card-body">
      <h5 class="card-title mb-4 text-center">Login</h5>
      <form action="/login" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">E-mail:</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha:</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
