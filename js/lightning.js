$(document).ready(function() {
  /*$(window).scroll(function() {
    if ($(this).scrollTop() > 140) {
      $(".sticky-event").addClass('navbar-sticked');
    } else {
      $(".sticky-event").removeClass('navbar-sticked');
    }
  });*/

  let cart = [];
  let price = 0;

  const redraw = function() {
    let size = cart.length;
    let html = "";
    while(size > 0) {
      html += "<tr data-index=\"" + (size - 1) + "\">" + $(cart[size - 1]).html() + "</tr>";
      size--;
    }
    console.log(html);
    $("#cart-list").html(html);
  };

  $(".service-table tr").click(function() {
    if ($(this).hasClass('bg-primary')) {
      $(this).removeClass('bg-primary');
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
      cart.push(this);
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
