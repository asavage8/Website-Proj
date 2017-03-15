(function($) {
  var places=["Longwood Gardens","Pompeii", "Florence", "Rome", "Cook's Forest","Versailles","Paris","Alps","Switzerland", "Vatican", "Home" ]
  $('.Photographs').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    centerMode: true,
    asNavFor: '.Photographs-nav'
  });
  $('.Photographs-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.Photographs',
   dots: true,
   centerMode: true,
   focusOnSelect: true
  });

  $(document).on('click', "#Place-button", function() {
  		var index = $('.Photographs .slick-current').attr("data-slick-index");
  		changePlace(parseInt(index, 10));
  	});

  $(document).on('click', '.Photographs-nav .slick-next, .Photographs-nav .slick-prev', function() {
		document.getElementById("Place-button").innerHTML = "Answer!";
	});

  function changePlace(idx){
    document.getElementById("Place-button").innerHTML = "It's "+places[idx]+"!";
  }

})(jQuery);
