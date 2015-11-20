<div class="col-md-12">
  <h1>Usuários</h1>
  <?php if($_GET['success']) { ?>
  <div class="alert alert-success" role="alert"><?= $_GET['success']; ?></div>
  <?php } else if($_GET['error']) { ?>
  <div class="alert alert-danger" role="alert"><?= $_GET['error']; ?></div>
  <?php } ?>
  <?= (isAdmin()) ? '<a href="cadastrar-usuario.php" class="btn btn-success">Adicionar Novo</a>' : null ; ?>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#1</th>
        <th>Login</th>
        <th>Tipo</th>
        <?= (isAdmin()) ? '<th>Ações</th>' : null ; ?>
      </tr>
    </thead>
    <tbody>
      <?php
      loadModel('User');
      $user = new User($GLOBALS['mysqli']);
      $query = $user->getUsers();
      while($data = $query->fetch_object() ) { ?>
        <tr>
          <td><?= $data->id; ?></td>
          <td><?= $data->login; ?></td>
          <td><?= $data->admin; ?></td>
          <?php if(isAdmin()) { ?>
          <td>
            <a href="editar-usuario.php?id=<?= $data->id; ?>" class="btn btn-primary">Alterar</a>
            <a href="app/delete-user-action.php?id=<?= $data->id; ?>" class="btn btn-danger">Deletar</a>
          </td>
          <?php } ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
