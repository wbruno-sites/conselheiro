<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Regiões</h1>


<a href="?report=region&amp;order=id" class="btn btn-default">Ordenado por ID</a>
<a href="?report=region&amp;order=total" class="btn btn-default">Ordenado por votos</a>

<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->region(_get('order'));

  if($GLOBALS['mysqli']->error) {
    echo '<p class="alert alert-danger" role="alert">' . $GLOBALS['mysqli']->error .'</p>';
  } else {

  $prev_region = '';
  $total = 0;
  while($data = $query->fetch_object()) {
    $total += $data->total;

    if ($prev_region === '' || $prev_region !== $data->region_name) {
?>

<?php if ($prev_region !== '') {  ?>
  </tbody></table>
<?php } ?>


<h2><?php echo $data->region_name; ?></h2>

<?php $prev_region = $data->region_name; ?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th width="80">ID</th>
      <th>Nome</th>
      <th>Região</th>
      <th width="80">Total</th>
    </tr>
  </thead>
  <tbody>

<?php
    }
?>
    <tr>
      <td><?php echo $data->id ?></td>
      <td><?php echo $data->name ?></td>
      <td><?php echo $data->region_name ?></td>
      <td><?php echo $data->total ?></td>
    </tr>
<?php
}
}//else
?>
  </tbody>
</table>

<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->whiteAndNulls(_get('order'));
?>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th width="80">ID</th>
      <th>Nome</th>
      <th width="80">Total</th>
    </tr>
  </thead>
  <tbody>

<?php
  while($data = $query->fetch_object()) {
    $total += $data->total;
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
  <tfoot>
    <tr>
      <td colspan="2"><b>Total:</b></td>
      <td><?= $total; ?></td>
    </tr>
  </tfoot>
</table>
