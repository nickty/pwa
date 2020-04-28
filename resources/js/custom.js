

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

$('#add_client').submit(function(){

  var  name = $('#name').val();
  var  email = $('#emailid').val(); 
  var  password = $('#pass').val(); 
  var  rpassword = $('#rpass').val();

   url=$(this).attr('action');

  
    // $.ajax({
    //   type: 'POST',
    //   url: 'home/register',
    //   data:{name:name, email:email, password:password, rpassword:rpassword},
    //   success:function(data){
    //     alert('registered'); 
    //     location.reload();  
        
    //   }, 
    //   error:function(){
    //     alert("Pass did not matched!")
    //   }
    // });
  



  

  $.post(url,{name:name, email:email, password:password, rpassword:rpassword}, function(data) {
    if (data.match('1')) {
      alert('You are registered now!')
      setTimeout(function(){
        window.location.href="http://localhost/pwaoptimizer/home/dashboard"; 
      }, 2000); 
    } else if(data.match('2'))
    {
      alert('Password did not matched!'); 
    } else if (data.match('3')) {
      alert('The email address is already exist!')
    }
    else 
    {
      alert('Unknow error!')
    }
  }); 

  return false; 
});

$('#client_login').submit(function(){
  
  var email = $('#emailid').val(); 
  var password = $('#pass').val(); 
  url=$(this).attr('action');

  return alert(email + password);
  return false;  

  $.post(url, {email:email, password:password}, function(data){
    if (data.match('1')) {
      alert('Wrong access information!'); 
    }
    else if (data.match('0')) {
      alert('lgged in')
    } else 
    {
      alert('Unknow error!')
    }
  }); 


  return false; 
});


