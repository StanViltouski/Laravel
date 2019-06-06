$('#form_sub').on('submit', function(){
	
	let preloader = $('.preloader');

	if( !preloader.hasClass('preloader_show') ) {
		show(function(){
			preloader.addClass('preloader_show');
	})
		
	} else { return; }
	  
})

function show(cbk) {
	
	let callback = cbk;

	setInterval(() => {
		callback();
	}, 500)
	
}