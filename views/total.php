<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Total</h1>


<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->total();
  while($data = $query->fetch_object()) {
?>
    <tr>
      <td><?php echo $data->id ?></td>
      <td><?php echo $data->name ?></td>
      <td><?php echo $data->total ?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
