
// lesson 1
$(document).ready(function(){
	$('.responsive_icons .fa').on('mouseenter', function(){
		console.log('.fa');
		$(".responsive_icons .fa").addClass('fa-spin');
	});
	$('.responsive_icons .fa').on('mouseleave', function(){
		$(".responsive_icons  .fa").removeClass('fa-spin');
	});


	// hide Extra Bootstrap Examples
	$('.extra_images').hide();
	$('.view_more_examples').on('click', function(){
		$('.extra_images').slideToggle(1000);
	});


	// slideToggle Tasks
	$(".next1, .task1").hide();
	$('.task').on('click', function(){
		$(this).closest('.task').find('.task1, .next1').fadeIn();
	});


	// sildeToggle Bootstrap icons
	$('.extra_icons').hide();
	$('#more_bootstrap').on('click', function(){
		$('.extra_icons').fadeToggle(500);
	});


	// smoothscroll
	$(".smooth, .tabs").click(function() {
		$('html').find('.main_content').css('height', '100%');
		$(window).scrollTop(0);
		$('html').find('.main_content').css('height', '100vh');
	});
	// Tooltips
	$('[data-toggle="tooltip"]').tooltip()
});

function adjustSidebar() {
	if ($("#sidebar").hasClass("open")) {
		$('#sidebar').removeClass('open').addClass('closed').animate({
			'width':'3.5%'
		}, 500);
		$("#sidebar > a").animate({
			'left':'1%'
		}, 500);
		$('#main_content').animate({ 'width':'96.5%' }, 750);
		$('.primary_logo').fadeToggle();
		$('.course_materials').fadeToggle();
	} else {
		$('#sidebar').addClass('open').removeClass('closed').animate({
			'width':'25%'
		}, 500);
		$("#sidebar > a").animate({
			'left':'22%'
		}, 500);
		$('#main_content').animate({ 'width':'75%' }, 750);
		$('.primary_logo').fadeToggle();
		$('.course_materials').fadeToggle();
		console.log('closed');
	}
}