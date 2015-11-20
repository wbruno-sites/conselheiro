var $menu_toggle = $("#menu-toggle"),
    $votes_amount = $('input[name="votes_amount[]"]'),
    $school_id = $('select[name="school_id"]'),
    $room_id = $('select[name="room_id"]'),
    $btn_confirm = $('.btn-confirm');


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

$btn_confirm.on('click', function() {
  var $this = $(this),
      $tr = $this.parents('tr'),
      data = $tr.data();

  data.votes_amount = $tr.find('input[name="votes_amount[]"]').val();

  if(!data.votes_amount) {
    return;
  }

  update('app/confirm-vote.php', data)
    .then(function(data) {
      if (data.result) {
        $tr.find('.status').html('<span class="label label-success">confirmed</span>');
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


function update(url, data) {
  if(!data.votes_amount) {
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
