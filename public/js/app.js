/* Menu Toggle */
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$('input[name="votes_amount[]"]').on('keyup', function() {
  mascara(this, mnum);
});
