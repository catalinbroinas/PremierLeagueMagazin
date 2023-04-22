$(function () {
  $('[data-toggle="popover"]').popover()
})

$(function () {
  $('.example-popover').popover({
    container: 'body'
  })
})

$('.popover-dismiss').popover({
  trigger: 'focus'
})

// popovers initialization - on hover
$('[data-toggle="popover-hover"]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
});

// popovers initialization - on click
$('[data-toggle="popover-click"]').popover({
  html: true,
  trigger: 'click',
  placement: 'bottom',
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
// Animations init
new WOW().init();