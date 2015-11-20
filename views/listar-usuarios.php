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
            <button class="btn btn-primary">Alterar</button>
            <button class="btn btn-danger">Deletar</button>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
