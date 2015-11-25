var $menu_toggle = $("#menu-toggle"),
    $votes_amount = $('input[name="votes_amount[]"]'),
    $school_id = $('select[name="school_id"]'),
    $room_id = $('select[name="room_id"]'),
    $confirmAll = $('#confirm-all'),
    $votesTable = $('#votes-table');


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

  update('app/confirm-all.php', { items: votes })
    .then(function(data) {
      location.href = '';
    });
});


function update(url, data) {
  if(!data.votes_amount && !data.items[0].votes_amount) {
    return;
  }

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
