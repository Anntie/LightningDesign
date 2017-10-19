$(document).ready(function() {
  /*$(window).scroll(function() {
    if ($(this).scrollTop() > 140) {
      $(".sticky-event").addClass('navbar-sticked');
    } else {
      $(".sticky-event").removeClass('navbar-sticked');
    }
  });*/

  let iPhone5 = [];
  let iPhone5s = [];
  let iPhoneSE = [];
  let iPhone6 = [];
  let iPhone6s = [];
  let iPhone7 = [];
  let price = 0;

  let cart = new Map();
  cart.set("5_", iPhone5);
  cart.set("5s_", iPhone5s);
  cart.set("SE_", iPhoneSE);
  cart.set("6_", iPhone6);
  cart.set("6s_", iPhone6s);
  cart.set("7_", iPhone7);


  const redraw = function() {
    let html = "";

    for (let [phone, item] of cart) {
      let size = item.length;
      if (size > 0) {
        html += '<tr class="table-info"><td colspan="3">iPhone ' + phone.slice(0, -1) + '</td></tr>';
      }
      while(size > 0) {
        html += "<tr data-phone=\"" + phone + "\" data-index=\"" + (size - 1) + "\">" + $(item[size - 1]).html() + '<td width="5% !important"><span class="btn btn-sm btn-danger delete-item" data-toggle="tooltip" data-placement="right" title="Удалить"><i class="fa fa-times fa-1x"></i></span></td>' + "</tr>";
        size--;
      }
    }
    $("#cart-list").html(html);
    $('[data-toggle="tooltip"]').tooltip();

    $(".delete-item").click(function() {
      let tr = $(this).parent().parent();
      let index = tr.data('index');
      let phone = tr.data('phone');
      let item = $(cart.get(phone)[index]);
      item.trigger('click');
      tr.remove();
      redraw();
    });
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
        case "iPhone6s-tbody":
          cart = iPhone6s;
          break;
        case "iPhone7-tbody":
          cart = iPhone7;
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
        case "iPhone6s-tbody":
          iPhone6s.push(this);
          break;
        case "iPhone7-tbody":
          iPhone7.push(this);
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

});
