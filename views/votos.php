<?php
require('./models/ElectoralVotes.php');
require('./models/School.php');
?>

<h1>Apurar votos</h1>

<div class="col-md-9">
  <label>NOME DA ESCOLA</label>
<?php
  $ev = new School($GLOBALS['mysqli']);
  $query = $ev->getAll();
  $amount = 0;

  if(!$query) {
    echo '<p class="alert alert-danger" role="alert">' . $GLOBALS['mysqli']->error . '</p>';
  } else {
?>
  <select name="school_id" class="form-control">
    <option>Selecione</option>
<?php
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
    $selected = _get('room_id') == $i ? ' selected="selected"' : '';
?>
    <option value="<?php echo $i; ?>"<?php echo $selected; ?>><?php echo $i; ?></option>
<?php
  $i++;
  }

} //else
?>
  </select>
</div><!-- .col-md-3 -->

<div class="col-md-12">
  <h2>Quantidade de cédulas da sala</h2>
<?php
    $ev = new ElectoralVotes($GLOBALS['mysqli']);
    $query = $ev->get_notes(_get('school_id'), _get('room_id'));

    $notes_amount = 0;
    if ($query->num_rows) {
      $data = $query->fetch_object();
      $notes_amount = $data->amount;
    }
?>
  <table id="notes-table" class="table table-striped table-hover">
    <tr data-schoolId="<?php echo _get('school_id'); ?>" data-roomId="<?php echo _get('room_id'); ?>">
      <td>Cédulas</td>
      <td width="100">
        <input type="text" pattern="[0-9]+" required="required" class="form-control" id="notes" value="<?php echo $notes_amount; ?>" />
      </td>
      <td width="50">x 5</td>
      <td width="100" id="notes-total">0</td>
    </tr>
  </table>
  <h2>CANDIDATOS</h2>

  <?php
  if (_get('school_id') && _get('room_id')) {
  ?>
  <table id="votes-table" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Número</th>
        <th>Região</th>
        <th>Nome</th>
        <th>Votos</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
  <?php
    $ev = new ElectoralVotes($GLOBALS['mysqli']);
    $query = $ev->getCalculation(_get('school_id'), _get('room_id'));
    while($data = $query->fetch_object()) {
      $status = $ev->getStatusLabel($data->status);
  ?>
      <tr data-candidateId="<?php echo $data->id; ?>" data-schoolId="<?php echo _get('school_id'); ?>" data-roomId="<?php echo _get('room_id'); ?>">
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->region_name; ?></td>
        <td><?php echo $data->name; ?></td>
        <td>
          <?php if(isAdmin()) { ?>
          <input type="tel" name="votes_amount[]" pattern="[0-9]+" required="required" maxlength="10" class="form-control" value="<?php echo $data->votes_amount; ?>" />
          <?php } else {
            if($data->status === 'confirmed') {
              echo $data->votes_amount;
            } else { ?>
          <input type="tel" name="votes_amount[]" pattern="[0-9]+" required="required" maxlength="10" class="form-control" value="<?php echo $data->votes_amount; ?>" />
          <?php
              }
            }
          ?>
        </td>
        <td class="status"><?php echo $status; ?></td>
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

<?php if (isAdmin()) {?>
  <div class="col-sm-6 col-sm-offset-3">
    <button class="btn btn-block btn-lg btn-success" id="confirm-all">Confirmar</button>
  </div>
<?php } ?>
</div>
