$("document").ready(function() {

  // Prevent <img> dragging
  $('img').on('dragstart', function(event) { event.preventDefault(); });

  $(".img-slider").height($("#carousel-col").height());
  $(".img-slider").width("auto");
  $(".img-slider").css("margin-left", -Math.abs($(".img-slider").width() - $("#carousel-col").width()));


});
