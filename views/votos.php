<?php
require('./models/ElectoralVotes.php');
require('./models/School.php');
?>

<div class="col-md-9">
  <label>NOME DA ESCOLA</label>
  <select name="school_id" class="form-control">
    <option>Selecione</option>
<?php
  $ev = new School($GLOBALS['mysqli']);
  $query = $ev->getAll();
  $amount = 0;
  while($data = $query->fetch_object()) {
    $selected = '';

    if ($data->id == _get('school_id')){
      $amount = $data->rooms_amount;
      $selected = ' selected="selected"';
    }
?>
    <option value="<?php echo $data->id; ?>" data-rooms-amount="<?php echo $data->rooms_amount; ?>"<?php echo $selected; ?>><?php echo $data->id, 'º ', $data->name; ?></option>
<?php
  }
?>
  </select>
</div><!-- .col-md-9 -->

<div class="col-md-3">
  <label>SALA</label>
  <select name="room_id" class="form-control">
<?php

  $i = 1;
  while($amount--) {
?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
  $i++;
  }
?>
  </select>
</div><!-- .col-md-3 -->

<h2>CANDIDATOS</h2>

<table>
  <thead>
    <tr>
      <th>Número</th>
      <th>Região</th>
      <th>Nome</th>
      <th>Votos</th>
    </tr>
  </thead>
  <tbody>
<?php
if (_get('school_id') && _get('room_id')) {
  $ev = new ElectoralVotes($GLOBALS['mysqli']);
  $query = $ev->getCalculation(_get('school_id'), _get('room_id'));
  while($data = $query->fetch_object()) {
?>
    <tr>
      <td><?php echo $data->id; ?></td>
      <td><?php echo $data->name; ?></td>
      <td><?php echo $data->region_id; ?></td>
      <td><input type="tel" name="votes_amount[]" pattern="[0-9]+" required="required" maxlength="10" class="form-control" /></td>
    </tr>
<?php
  }
} else {
?>
  <p>Você deve selecionar alguma escola e alguma sala antes.</p>
<?php
}
?>
  </tbody>
</table>
