<form action="app/login-action.php" method="POST" class="form-login">
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="login">Login</label>
      <input type="email" name="login" id="login" class="form-control" placeholder="seu@email.com" required="required" />
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Sua senha" required="required" />
    </div>
    <br>
    <button class="btn btn-primary btn-block">Login</button>
  </fieldset>
</form>
