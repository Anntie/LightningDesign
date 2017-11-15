$(document).ready(function() {
  $(".delete-item").click(function() {
    if (confirm("Вы действительно хотите удалить этот заказ?")) {
      const tr = $(this).parent().parent();
      const id = tr.data('id');
      $.ajax({
        url: 'delete_order.php',
        type: 'POST',
        dataType: 'JSON',
        data: {"id": id}
      })
      .done(function(res) {
        if (res != 0) {
          alert("Произошла ошибка!");
        } else {
          $('*[data-id="' + id + '"]').fadeOut('200');
          setTimeout(function() {
            $('*[data-id="' + id + '"]').remove();
          }, 210);
        }
      })
      .fail(function() {
        alert("Произошла ошибка!");
      });
    }
  });
});
