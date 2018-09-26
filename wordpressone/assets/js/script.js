	// BURGER 1 ======
  $('.burgerContainer').on('click', function(){
    $('.burgerContainer .bars:nth-child(2)').toggleClass('opacityOff');
   $('.burgerContainer .bars:nth-child(1)').toggleClass('transformBurgerBarone');
   $('.burgerContainer .bars:nth-child(3)').toggleClass('transformBurgerBarthree');
   $('.nav-menu').toggle();
   $('.main-navigation').toggleClass('overlay-navcontainer');
   $('.content').toggle();
   $('footer').toggle();
 })


//  Sticky Nav ====
$(window).scroll(function () {

  // console.log($(window).scrollTop())
  let hero = $('#hero-banner').height();
  console.log(hero);
  if ($(window).scrollTop() >= hero - 100 && $(window).width() > 600) {
    $('.main-navigation').addClass('fixed-nav');
  } else {
      $('.main-navigation').removeClass('fixed-nav');
    }
});