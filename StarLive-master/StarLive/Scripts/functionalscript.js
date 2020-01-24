$(document).ready(function(){
	if($(window).width() > 1024){
		var compimg = $(".slider-lg-container").height();
		$(".competition-img").css("height", compimg);
	}
	$("#bannervideo").click(function() {
		var video = $("#bannervideo").get(0);
		video.play();
		$(this).css("visibility", "hidden");
		return false;
	});

	
	$('#age-category').change(function(){
		if($(this).val() == "below-thirteen"){
			$('.below-thirteen').show();
			$('.above-thirteen').hide();
		}else{
			$('.below-thirteen').hide();
			$('.above-thirteen').show();
		}	
	});
	
	$("#forget-pass").click(function(){
		$("#form-section,#reset-password").hide();
		$("#forget-password").show();
	});
	$("#reset").click(function(){
		$("#form-section,#forget-password").hide();
		$("#reset-password").show();
	});
	$("#register").click(function(){
		$(".nav-tabs li,#Login").removeClass("active");
		$("#Registration,.reg").addClass("active");
	});
	$("#login").click(function(){
		$("#Login #Registration,.reg").removeClass("active");
		$("#Login ,.login").addClass("active");
	});

	$(".close-btn").click(function(){
		$('.menu-item').hide();
		$(".submenu").children('span').removeClass('caret-right').addClass('caret');
	});
	
	$('#Sidenav .submenu').click(function(){
		$(".submenu").children('span').removeClass('caret-right').addClass('caret');
		$(this).children('span').removeClass('caret').addClass('caret-right');
		$(".submenu").children('.menu-item').hide();
		$(this).children('.menu-item').show();
	});
	
	
});
  