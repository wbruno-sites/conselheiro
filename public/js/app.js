var $menu_toggle = $("#menu-toggle"),
    $votes_amount = $('input[name="votes_amount[]"]'),
    $school_id = $('select[name="school_id"]'),
    $room_id = $('select[name="room_id"]'),
    $confirmAll = $('#confirm-all'),
    $notes = $('#notes'),
    $notesTotal = $('#notes-total'),
    $votesTable = $('#votes-table');

var NOTES_QUANTITY = 5;


/* Menu Toggle */
$menu_toggle.on('click', function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$votes_amount.on('keyup', function() {
  mascara(this, mnum);
});

$votes_amount.on('blur', function() {
  var $this = $(this),
      $tr = $this.parents('tr'),
      data = $tr.data();

  data.votes_amount = $this.val();

  if(!data.votes_amount) {
    return;
  }

  update('app/compute-vote.php', data)
    .then(function(data) {
      if (data.result) {
        $tr.find('.status').html('<span class="label label-warning">pending</span>');
      }
    });
});

notesTotal();
$notes.on('keyup', notesTotal);

$notes.on('blur', function() {
  var $this = $(this);
  var data = $this.parents('tr').data();
  data.amount = $this.val();

  update('app/compute-notes.php', data);
});

$school_id.on('change', function() {
  var $this = $(this),
      rooms_amount = $(this).find('option:selected').data('rooms-amount'),
      options = [],
      i = 1;

  while(rooms_amount--) {
    options.push('<option values="' + i + '">' + i + '</option>');
    i++;
  }

  $room_id.html(options.join(','));

  location.href = '?school_id=' + $this.val() + '&room_id=1';
});

$room_id.on('change', function() {
  var $this = $(this);
  location.href = '?school_id=' + $school_id.val() + '&room_id=' + $this.val();
});


$confirmAll.on('click', function() {
  var votes = [];

  $votesTable.find('tbody tr').each(function() {
    var $tr = $(this),
        data = $tr.data(),
        votes_amount = $tr.find('input[name="votes_amount[]"]').val();

    data.votes_amount = parseInt(votes_amount || 0, 10);
    votes.push(data);
  });

  var total = parseInt($notes.val() * NOTES_QUANTITY, 10);

  if (!votes.length) {
    return;
  }

  if (total !== votesCount()) {
    alert('O número de votos nas cédulas não confere com o número de votos digitados.');
    return;
  }

  update('app/confirm-all.php', { items: votes })
    .then(function(data) {
      location.href = '';
    });
});

function votesCount() {
  var total = 0;
  $('input[name="votes_amount[]"]').each(function() {
    total += parseInt($(this).val() || 0, 10);
  });

  return total;
}

function notesTotal() {
  var total = $notes.val() * NOTES_QUANTITY;

  $notesTotal.html(total);
}

function update(url, data) {
  return $.ajax({
    url: url,
    data: data,
    type: 'POST',
    dataType: 'JSON'
  })
  .then(function(data) {
    console.log(data);
    return data;
  })
  .fail(function(err) {
    console.log(err);
  });
}
