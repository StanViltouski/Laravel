$('.contact_form button').on('click', function(){
	let preloader = $('.preloader');

	if( !preloader.hasClass('preloader_show') ) {
		$('.preloader').addClass('preloader_show');
	} else { return; }
	  
})