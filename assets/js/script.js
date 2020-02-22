window.onload = function() {
  $(".fpage1").click(function() {
    $(".fpage2").removeClass("fpage_active");
    $(".fpage1").addClass("fpage_active");
    $(".reg_form").addClass("right_sl");
    $(".login_form").removeClass("left_sl");
  });
  $(".fpage2").click(function() {
    $(".fpage1").removeClass("fpage_active");
    $(".fpage2").addClass("fpage_active");
    $(".login_form").addClass("left_sl");
    $(".reg_form").removeClass("right_sl");
  });
}
