$(document).ready(function() {
	$(document).on('click', '.top a', function(event) {
		var section = $(this);
		$('html, body').stop().animate({
			scrollTop: $(section.attr('href')).offset().top
		}, 1608, 'easeInOutQuint');
		event.preventDefault();
	});
  $(window).scroll(function() {
    if ($(window).scrollTop() > $('#About').offset().top) {
      $('nav').addClass('faded');
    }
    else {
      $('nav').removeClass('faded');
    }
  });
});
