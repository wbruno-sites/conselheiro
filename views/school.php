<?php
require('./models/ElectoralVotes.php');
?>

<h1>Relatórios - Escolas</h1>



<?php
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->school();

  $prev_school = '';
  while($data = $query->fetch_object()) {

    if ($prev_school === '' || $prev_school !== $data->school_name) {


?>

<?php if ($prev_school !== '') {  ?>
  </tbody></table>
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
?>
  </tbody>
</table>
