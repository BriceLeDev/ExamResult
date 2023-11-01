$(document).ready(function () {
  $(".btn").click(function (event) {
    event.preventDefault();
    $("#msg1").css({
      visibility: "visible",
    });
    $.ajax({
      url: "loginAdmin.php",
      method: "POST",
      data: $("#formulaire_connection").serialize(),
      success: function (data) {
        $("#msg1").html(data);
      },
    });
  });
});
