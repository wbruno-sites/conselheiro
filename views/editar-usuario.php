<?php
if(_get('id')){
  $user = new User($GLOBALS['mysqli']);
  $query = $user->findUser(_get('id'))->fetch_object();

  if(!$query) {
    $message = "Usuário inválido!";
    header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?error={$message}");
    exit();
  }

}else {
  $message = "Você não selecionou um usuário!";
  header("Location: http://{$GLOBALS['config']['app']['url']}/listar-usuarios.php?error={$message}");
  exit();
}
?>
<br><br>
<div class="col-md-12">
  <form action="app/update-user-action.php" method="POST">
    <fieldset>
      <legend>Cadastrar User</legend>
      <input type="hidden" name="id" value="<?= $query->id; ?>">
      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" value="<?= $query->login; ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="checkbox" name="admin" id="admin" value="admin" value="admin" <?= ($query->admin === 'admin') ? 'checked' : null; ?>>
        <label for="admin">Admin?</label>
      </div>

      <button class="btn btn-primary">Cadastrar</button>
    </fieldset>
  </form>
</div>
