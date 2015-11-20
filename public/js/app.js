/* Menu Toggle */
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$('input[name="votes_amount[]"]').on('keyup', function() {
  mascara(this, mnum);
});


var $school_id = $('select[name="school_id"]'),
    $room_id = $('select[name="room_id"');

$school_id.on('change', function() {
  var $this = $(this),
      rooms_amount = $(this).find('option:selected').data('rooms-amount'),
      options = [],
      i = 1;


      console.log(rooms_amount);

  while(rooms_amount--) {
    options.push('<option values="' + i + '">' + i + '</option>');
    i++;
  }

  $room_id.html(options.join(','));

  history.pushState({}, '', '?school_id=' + $this.val() + '&room_id=1');
});

$room_id.on('change', function() {
  var $this = $(this);
  history.pushState({}, '', '?school_id=' + $school_id.val() + '&room_id=' + $this.val());
});
