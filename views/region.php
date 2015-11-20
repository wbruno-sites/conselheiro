<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Regiões</h1>



<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->region();

  $prev_region = '';
  while($data = $query->fetch_object()) {

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
      <th>ID</th>
      <th>Nome</th>
      <th>Região</th>
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
      <td><?php echo $data->region_name ?></td>
      <td><?php echo $data->total ?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
