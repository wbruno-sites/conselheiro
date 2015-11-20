
<div class="col-md-9">
  <label>NOME DA ESCOLA</label>
  <select name="school_id" class="form-control">
    <option></option>

  </select>
</div><!-- .col-md-9 -->

<div class="col-md-3">
  <label>SALA</label>
  <select name="room_id" class="form-control">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
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
  require('./models/ElectoralVotes.php');

  $ev = new ElectoralVotes($mysqli);
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
?>
  </tbody>
</table>
