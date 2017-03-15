$('.Photographs').slick({
 slidesToShow: 1,
 slidesToScroll: 1,
 arrows: true,
 fade: true,
 variableWidth: true,
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
