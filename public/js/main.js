$(function () {
  $(".navbar-toggler").click(function () {
    const target = $(this).data("bsTarget");
    $(target).toggleClass('open');
  })
})