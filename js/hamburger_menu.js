$('#btn_hamburger_menu').click(function(){
  if($('#main_nav').hasClass('animated_hamburger_menu'))
  {
    $('#main_nav').removeClass('animated_hamburger_menu');
  }
  else {
    $('#main_nav').addClass('animated_hamburger_menu');
  }
});
