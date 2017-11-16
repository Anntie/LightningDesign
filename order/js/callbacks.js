$(document).ready(function() {
  $(".delete-item").click(function() {
    if (confirm("Вы действительно хотите удалить этот номер?")) {
      const li = $(this).parent();
      const id = li.data('id');
      $.ajax({
        url: 'delete_callback.php',
        type: 'POST',
        dataType: 'JSON',
        data: {"id": id}
      })
      .done(function(res) {
        if (res != 0) {
          alert("Произошла ошибка!");
        } else {
          li.fadeOut('200');
          setTimeout(function() {
            li.remove();
          }, 210);
        }
      })
      .fail(function() {
        alert("Произошла ошибка!");
      });
    }
  });
});
