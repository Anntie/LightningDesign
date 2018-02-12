$(document).ready(function() {
  // Lazy image loading
  [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
    img.setAttribute('src', img.getAttribute('data-src'));
    img.onload = function() {
      img.removeAttribute('data-src');
    };
  });

  // Prevent <img> dragging
  $('img').on('dragstart', function(event) { event.preventDefault(); });

  // Tooltip fix
  $('[data-toggle="tooltip"]').tooltip().click(function(e) {
    $(this).tooltip('toggle');
  });

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
    $('html').addClass('freezePage');
    $('body').addClass('freezePage');
  });
  $('.modal').on('hidden.bs.modal', function (e) {
    $('html').removeClass('freezePage');
    $('body').removeClass('freezePage');
  });
  // End of modal fix

  $(".page-scroll").click(function(e) {
      e.preventDefault();
      $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top - $(".navbar").height()
      }, 400);
  });

  const alertError = function() {
    $(".alert-error").fadeIn();
    setTimeout(function() {
      $(".alert-error").fadeOut();
    }, 5000);
  };

  const alertSuccess = function() {
    $(".alert-success").fadeIn();
    setTimeout(function() {
      $(".alert-success").fadeOut();
    }, 5000);
  };

  $(".alert").alert();

  let iPhone5 = [];
  let iPhone5s = [];
  let iPhoneSE = [];
  let iPhone6 = [];
  let iPhone6Plus = [];
  let iPhone6s = [];
  let iPhone6sPlus = [];
  let iPhone7 = [];
  let iPhone7Plus = [];
  let iPhone8 = [];
  let iPhone8Plus = [];
  let iPhoneX = [];
  let price = 0;

  let cart = new Map();
  cart.set("5_", iPhone5);
  cart.set("5s_", iPhone5s);
  cart.set("SE_", iPhoneSE);
  cart.set("6_", iPhone6);
  cart.set("6 Plus_", iPhone6Plus);
  cart.set("6s_", iPhone6s);
  cart.set("6s Plus_", iPhone6sPlus);
  cart.set("7_", iPhone7);
  cart.set("7 Plus_", iPhone7Plus);
  cart.set("8_", iPhone8);
  cart.set("8 Plus_", iPhone8Plus);
  cart.set("X_", iPhoneX);


  const clearCart = function() {
    $(".bg-primary").each(function() {
      $(this).trigger('click');
    });
  };

  const clearForm = function() {
    $("input").each(function() {
      $(this).val("");
    });
  }

  $(".close-modal").click(function() {
    clearCart();
  });

  const redraw = function() {
    let data = [];
    for (let [phone, item] of cart) {
      let size = item.length;
      const model = phone.slice(0, -1);
      while(size > 0) {
        let value = $(item[size - 1]).html();
        data.push({model: model, value: value});
        size--;
      }
    }
    $('[data-toggle="tooltip"]').tooltip();
    $("#order-data").val(JSON.stringify(data));
    if (price > 0) {
      $(".gotocart").prop('disabled', false).removeClass('btn-secondary').addClass('btn-primary');
    } else {
      $(".gotocart").prop('disabled', true).removeClass('btn-primary').addClass('btn-secondary');
    }
  };

  $(".service-table tr").click(function() {
    if ($(this).hasClass('tr-disabled')) return false;

    if ($(this).hasClass('bg-primary')) {
      $(this).removeClass('bg-primary');
      let cart;
      switch ($(this).parent().attr('id')) {
        case "iPhone5-tbody":
          cart = iPhone5;
          break;
        case "iPhone5s-tbody":
          cart = iPhone5s;
          break;
        case "iPhoneSE-tbody":
          cart = iPhoneSE;
          break;
        case "iPhone6-tbody":
          cart = iPhone6;
          break;
        case "iPhone6Plus-tbody":
          cart = iPhone6Plus;
          break;
        case "iPhone6s-tbody":
          cart = iPhone6s;
          break;
        case "iPhone6sPlus-tbody":
          cart = iPhone6sPlus;
          break;
        case "iPhone7-tbody":
          cart = iPhone7;
          break;
        case "iPhone7Plus-tbody":
          cart = iPhone7Plus;
        case "iPhone8-tbody":
          cart = iPhone8;
          break;
        case "iPhone8Plus-tbody":
          cart = iPhone8Plus;
          break;
        case "iPhoneX-tbody":
          cart = iPhoneX;
          break;
      }
      let index = cart.indexOf(this);
      if (index >= 0) {
        cart.splice(index, 1);
        price -= parseInt($(this).children('td').eq(1).html().substr(1));
      }
      if (price <= 0) {
        $(".price").addClass('d-none');
        $("#cart-list-table").addClass('d-none');
      } else {
        $(".price").html("Общая стоимость: ₴" + price);
      }
      redraw();
    } else {
      $(this).addClass('bg-primary');

      switch ($(this).parent().attr('id')) {
        case "iPhone5-tbody":
          iPhone5.push(this);
          break;
        case "iPhone5s-tbody":
          iPhone5s.push(this);
          break;
        case "iPhoneSE-tbody":
          iPhoneSE.push(this);
          break;
        case "iPhone6-tbody":
          iPhone6.push(this);
          break;
        case "iPhone6Plus-tbody":
          iPhone6Plus.push(this);
          break;
        case "iPhone6s-tbody":
          iPhone6s.push(this);
          break;
        case "iPhone6sPlus-tbody":
          iPhone6sPlus.push(this);
          break;
        case "iPhone7-tbody":
          iPhone7.push(this);
          break;
        case "iPhone7Plus-tbody":
          iPhone7Plus.push(this);
          break;
        case "iPhone8-tbody":
          iPhone8.push(this);
          break;
        case "iPhone8Plus-tbody":
          iPhone8Plus.push(this);
          break;
        case "iPhoneX-tbody":
          iPhoneX.push(this);
          break;
      }

      price += parseInt($(this).children('td').eq(1).html().substr(1));
      if (price > 0) {
        if ($(".price").hasClass('d-none')) {
          $(".price").removeClass('d-none');
          $("#cart-list-table").removeClass('d-none');
        }
        $(".price").html("Общая стоимость: ₴" + price);
      }
      redraw();
    }
  });

  $("#callback-form").submit(function(e) {
    e.preventDefault();
    let phone = $("#phonetocall").val();
    if (!phone) {
      $("#warning-cb").fadeIn();
      setTimeout(function() {
        $("#warning-cb").fadeOut();
      }, 5000);
    }

    const data = {'phone': phone};

    $.ajax({
      url: 'order/callback.php',
      type: 'POST',
      dataType: 'JSON',
      data: data
    })
    .done(function(res) {
      if (res != 0) {
        $("#error-cb").fadeIn();
        setTimeout(function() {
          $("#error-cb").fadeOut();
        }, 5000);
      } else {
        $("#success-cb").fadeIn();
        gtag_report_conversion();
      }
    })
    .fail(function() {
      $("#error-cb").fadeIn();
      setTimeout(function() {
        $("#error-cb").fadeOut();
      }, 5000);
    });

    $(this).fadeOut();
    $("#phonetocall").val('');
    $("#callback-h5").fadeOut();
    setTimeout(function() {
      $("#helpModal").modal('hide');
    }, 5000);

  });

  $("#order-form").submit(function(e) {
    e.preventDefault();
    redraw();
    const name = $("#name").val();
    const phone = $("#phone").val();
    const adress = $("#adress").val();
    const order  = $("#order-data").val();

    let date;
    const dateDesktop = $("#date").val();
    const dateMobile = $("#date-mobile").val();

    if ((!dateDesktop && !dateMobile) || !name || !phone || !order || !adress) {
      $("#warning").fadeIn();
      setTimeout(function() {
        $("#warning").fadeOut();
      }, 5000);
      return false;
    } else {
      date = (dateInput === 0) ? dateMobile : dateDesktop;
    }

    const data = {
      'name': name,
      'phone': phone,
      'data': order,
      'adress': adress,
      'date': date
    };

    $.ajax({
      url: 'order/order.php',
      type: 'POST',
      dataType: 'JSON',
      data: data
    })
    .done(function(res) {
      if (res != 0) {
        alertError();
      } else {
        alertSuccess();
        clearCart();
        clearForm();

        $('html, body').animate({
            scrollTop: $("#order-form").offset().top
        }, 400);
        gtag_report_conversion();
      }
    })
    .fail(function() {
      alertError();
    });

  });

});
