$(".navTrigger").click(function () {
  $(this).toggleClass("active");
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();
});

$(window).scroll(function () {
  if ($(document).scrollTop() > 50) {
    $(".nav").addClass("affix");
    console.log("OK");
  } else {
    $(".nav").removeClass("affix");
  }
});

$("#randomizer").click(function () {
  var randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
  $("body").css("background-color", randomColor);
});

$("#randomizer").click(function () {
  var randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
  $(".blackbar").css("color", randomColor);
});
