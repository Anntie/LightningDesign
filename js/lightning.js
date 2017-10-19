$(document).ready(function() {
  /*$(window).scroll(function() {
    if ($(this).scrollTop() > 140) {
      $(".sticky-event").addClass('navbar-sticked');
    } else {
      $(".sticky-event").removeClass('navbar-sticked');
    }
  });*/

  $(".service-table tr").click(function() {
    if ($(this).hasClass('bg-primary')) {
      $(this).removeClass('bg-primary');
    } else {
      $(this).addClass('bg-primary');
    }
  });

});
