$("document").ready(function() {

  // Prevent <img> dragging
  $('img').on('dragstart', function(event) { event.preventDefault(); });

  $(".img-slider").height($("#carousel-col").height());
  $(".img-slider").width("auto");
  $(".img-slider").css("margin-left", -Math.abs($(".img-slider").width() - $("#carousel-col").width()));

  // Modal fix
  $(document).on({
    'show.bs.modal': function() {
      var zIndex = 1040 + (10 * $('.modal:visible').length);
      $(this).css('z-index', zIndex);
      setTimeout(function() {
        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
      }, 0);
    },
    'hidden.bs.modal': function() {
      if ($('.modal:visible').length > 0) {
        // restore the modal-open class to the body element, so that scrolling works
        // properly after de-stacking a modal.
        setTimeout(function() {
          $(document.body).addClass('modal-open');
        }, 0);
      }
    }
  }, '.modal');

  $('.modal').on('shown.bs.modal', function (e) {
    if(!$(this).hasClass('modal-small')) {
      $('html').addClass('freezePage');
      $('body').addClass('freezePage');
    }
  });
  $('.modal').on('hidden.bs.modal', function (e) {
    if(!$(this).hasClass('modal-small')) {
      $('html').removeClass('freezePage');
      $('body').removeClass('freezePage');
    }
  });
  // End of modal fix

  var siliconeModel;
  var siliconeColor = "red";
  var siliconeCurrentItem = "#iPhone7Plus_red";

  function showSiliconeCase() {
    let caseItem = "#" + siliconeModel + "_" + siliconeColor;
    if (caseItem !== siliconeCurrentItem) {
      $(siliconeCurrentItem).addClass("d-none");
    }
    console.log(caseItem);
    $(caseItem).removeClass("d-none");
    siliconeCurrentItem = caseItem;
  }

  function selectPhone(li) {
    let caseMaterial = li.data("case");
    let model = li.data("model");

    if (caseMaterial === "silicone") {
      $("#siliconeChooser").addClass("d-none");
      $("#siliconeWindow").removeClass("d-none");
      $("#silicone-goback").removeClass("d-none");
      siliconeModel = model;
      showSiliconeCase();
    }

  }

  $("#silicone-goback").on('click', function() {
    $(this).addClass("d-none");
    $("#siliconeWindow").addClass("d-none");
    $("#siliconeChooser").removeClass("d-none");
  });

  $(".case-color").on('click', function() {
    let caseMaterial = $(this).data("case");
    let color = $(this).data("case-color");

    if (caseMaterial === "silicone") {
      siliconeColor = color;
      showSiliconeCase();
    }
  });

  $('.md-select').on('click', function(){
    $(this).toggleClass('active');
  });

  $('.md-select ul li').on('click', function() {
    var v = $(this).text();
    $('.md-select ul li').not($(this)).removeClass('active');
    $(this).addClass('active');
    $('.md-select label button').text(v);
    selectPhone($(this));
  });

});
