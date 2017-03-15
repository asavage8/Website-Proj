$('.Photographs').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  centerMode: true,
  useTransform: true,
  // centerPadding: '100px',
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
