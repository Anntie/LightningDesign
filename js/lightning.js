$(document).ready(function() {
  // Lazy image loading
  [].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
    img.setAttribute('src', img.getAttribute('data-src'));
    img.onload = function() {
      img.removeAttribute('data-src');
    };
  });

  // Safari bug fix
  // get the iso time string formatted for usage in an input['type="datetime-local"']
  var tzoffset = (new Date()).getTimezoneOffset() * 60000; //offset in milliseconds
  var localISOTime = (new Date(Date.now() - tzoffset)).toISOString().slice(0,-1);
  var localISOTimeWithoutSeconds = localISOTime.slice(0,16);

  // select the "datetime-local" input to set the default value on
  var dtlInput = document.querySelector('input[type="datetime-local"]');

  // set it and forget it ;)
  dtlInput.value = localISOTime.slice(0,16);

  $("#date").datetimepicker();

  $(".page-scroll").click(function(e) {
      e.preventDefault();
      $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top
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

  const redraw = function() {
    let html = "";
    let data = [];
    for (let [phone, item] of cart) {
      let size = item.length;
      const model = phone.slice(0, -1);
      if (size > 0) {
        html += '<tr class="table-info"><td style=\"background-color: #3498db; color: #fff;\" colspan="3">iPhone ' + model + '</td></tr>';
      }
      while(size > 0) {
        let value = $(item[size - 1]).html();
        html += "<tr data-phone=\"" + phone + "\" data-index=\"" + (size - 1) + "\">" + value + '<td width="5% !important"><span class="btn btn-sm btn-danger delete-item"><i class="fa fa-times fa-1x"></i></span></td>' + "</tr>";
        value = value.replace(/\s/g, ' ');
        data.push({model: model, value: value});
        size--;
      }
    }
    $("#cart-list").html(html);
    $('[data-toggle="tooltip"]').tooltip();

    $(".delete-item").click(function() {
      const tr = $(this).parent().parent();
      const index = tr.data('index');
      const phone = tr.data('phone');
      const item = $(cart.get(phone)[index]);
      item.trigger('click');
      tr.remove();
      redraw();
    });
    $("#order-data").val(JSON.stringify(data));
    if (price > 0) {
      $(".gotocart").prop('disabled', false).removeClass('btn-secondary').addClass('btn-primary');
    } else {
      $(".gotocart").prop('disabled', true).removeClass('btn-primary').addClass('btn-secondary');
    }
  };

  $(".service-table tr").click(function() {
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
      date = (!dateMobile) ? dateDesktop : dateMobile;
    }

    const data = {
      'name': name,
      'phone': phone,
      'data': order,
      'adress': adress,
      'date': date
    };

    clearCart();
    clearForm();

    $.ajax({
      url: 'order/',
      type: 'POST',
      dataType: 'JSON',
      data: data
    })
    .done(function(res) {
      if (res != 0) {
        alertError();
      } else {
        alertSuccess();
      }
    })
    .fail(function() {
      alertError();
    });

  });

});
