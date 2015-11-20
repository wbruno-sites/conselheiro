<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Total</h1>


<a href="?report=total&amp;order=id" class="btn btn-default">Ordenado por ID</a>
<a href="?report=total&amp;order=total" class="btn btn-default">Ordenado por votos</a>

<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->total(_get('order'));

  if($GLOBALS['mysqli']->error) {
    echo '<p class="alert alert-danger" role="alert">' . $GLOBALS['mysqli']->error .'</p>';
  } else {
?>
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
  while($data = $query->fetch_object()) {
?>
    <tr>
      <td><?php echo $data->id ?></td>
      <td><?php echo $data->name ?></td>
      <td><?php echo $data->total ?></td>
    </tr>
<?php
}
}//else
?>
  </tbody>
</table>
