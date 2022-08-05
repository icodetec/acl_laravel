// //MENU
// $(document).ready(function(){
//   $('.menu-toggle').click(function(){
//     $('.menu-toggle').css('display', 'none');
//     $('nav').css('display', 'block');
//     // $('nav').toggleClass('active');
//   });
// });


$(".container_menu_icon").click(function() {
	$(".container_menu_icon").toggleClass("active");
	$("nav").slideToggle(500);
});



