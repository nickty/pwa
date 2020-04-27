

$(document).ready(function(){
  $('.sidenav').sidenav();
});

$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
});

$(".dropdown-trigger").dropdown({
  coverTrigger:false, 
  hover: true
});

$(document).ready(function(){
  $('.collapsible').collapsible();
});

$(document).ready(function(){
  $('.carousel').carousel();
});

$(document).ready(function(){
  $('.modal').modal();
});

// $('#registerbtn').click(function(e){
//   e.preventDefault();
//   var name = $('#name').val();
//   var email = $('#email').val(); 
//   var password = $('#password').val(); 
//   var rpassword = $('#rpassword').val(); 

//  if (password === rpassword) {
//   alert('working')
//  } else 
//  {
//   alert('not working')
//  }


// }); 
