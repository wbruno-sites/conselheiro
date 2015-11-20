<br><br>
<div class="col-md-12">
  <form action="app/insert-user-action.php" method="POST">
    <fieldset>
      <legend>Cadastrar User</legend>
      <div class="form-group">
        <label for="login">Login</label>
        <input type="email" name="login" id="login" class="form-control" required="required" />
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required="required" />
      </div>
      <div class="form-group">
        <input type="checkbox" name="admin" id="admin" value="admin">
        <label for="admin">Admin?</label>
      </div>

      <button class="btn btn-primary">Cadastrar</button>
    </fieldset>
  </form>
</div>
