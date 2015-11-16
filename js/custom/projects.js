$(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
  $('body').css('overflow', 'hidden');
});

$(document).on('closed.fndtn.reveal', '[data-reveal]', function () {
  $('body').css('overflow', 'scroll');
});