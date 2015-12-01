<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Escolas</h1>


<a href="?report=school&amp;order=id" class="btn btn-default">Ordenado por ID</a>
<a href="?report=school&amp;order=total" class="btn btn-default">Ordenado por votos</a>

<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->school(_get('order'));

  if($GLOBALS['mysqli']->error) {
    echo '<p class="alert alert-danger" role="alert">' . $GLOBALS['mysqli']->error .'</p>';
  } else {

  $prev_school = '';
  $total_per_school = 0;
  $total = 0;
  while($data = $query->fetch_object()) {
    $total += $data->total;

    $total_per_school += $data->total;


    if ($prev_school === '' || $prev_school !== $data->school_name) {


?>

<?php if ($prev_school !== '') {  ?>
  </tbody>
  </tfoot>
    <tr><td colspan="3">Total por escola:</td><td><?php echo $total_per_school - $data->total; $total_per_school = $data->total; ?></td></tr>
  </tfoot>
  </table>
<?php } ?>


<h2><?php echo $data->school_id, 'º ', $data->school_name; ?></h2>

<?php $prev_school = $data->school_name; ?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Escola</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>

<?php
    }
?>
    <tr>
      <td><?php echo $data->id ?></td>
      <td><?php echo $data->name ?></td>
      <td><?php echo $data->school_id ?></td>
      <td><?php echo $data->total ?></td>
    </tr>
<?php
}
}//else
?>
  </tbody>
  <tfoot>
    <tr><td colspan="3">Total por escola:</td><td><?php echo $total_per_school; ?></td></tr>
    <tr>
      <td colspan="3"><b>Total:</b></td>
      <td><?= $total; ?></td>
    </tr>
  </tfoot>
</table>
