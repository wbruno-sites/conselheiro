<div class="col-md-12">
  <h1>Usuários</h1>
  <a href="cadastrar-usuario.php" class="btn btn-success">Adicionar Novo</a>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#1</th>
        <th>Login</th>
        <th>Tipo</th>
        <th>Ações</th>
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
          <td>
            <a href="editar-usuario.php?id=<?= $data->id; ?>" class="btn btn-primary">Alterar</a>
            <a href="app/delete-user-action.php?id=<?= $data->id; ?>" class="btn btn-danger">Deletar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
