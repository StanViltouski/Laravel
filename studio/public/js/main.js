$(function() {
    
    $('.abountBody_text p').fadeTo(1000, 1).addClass('show');// abount text show
    
    
    
	$('.menu_link').on({
		mouseover: function(){
		var body = $(this).attr('data-body');
		var picture = $(this).attr('data-picture');
		//console.log(name, body, picture);
		$('.aside_submenu h1').text(body);
		//$('.aside_submenu img').attr('src', '../img/'+picture+'.png'); // если картинка через img
		//$('#picture').css('background', '../img/minsk.png'); если через div
		//$('#picture').css('background', 'red');
		},
		
		mouseout: function(){
		 $('.aside_submenu h1').text('');
		 //$('.aside_submenu img').attr('src', '');
		}
		
	});
	
  var count = $('.basket_count').html();
    if(count == 0) {
        $('.basket_count').css("display", "none");
    } else { $('.basket_count').css("display", "block"); }
    
    
$(window).on('scroll', function(event) {

    var scrollValue = $(window).scrollTop();

    if (scrollValue > 400) {$('.mainBlocks_item p').fadeTo(1000, 1).addClass('show');} 
}); 
    
    
    
    
    
/*
   //Хлебные крошки Web Storage API
    
        $('.menu_crmb').on('click', function () {
        const breadcrumbsTwo = "";
        sessionStorage.setItem('breadcrumbsTwo', JSON.stringify(breadcrumbsTwo));
        //const breadcrumbs =  $(this).text(); 
        sessionStorage.setItem('breadcrumbs', JSON.stringify($(this).text()));
    })
        $('.secnd_crmb').text(JSON.parse(sessionStorage.getItem('breadcrumbs')));
    
    
        $('.subMenu_crmb').on('click', function () {
        sessionStorage.setItem('breadcrumbsTwo', JSON.stringify($(this).text()));
    })
        $('.third_crmb').text(JSON.parse(sessionStorage.getItem('breadcrumbsTwo')));
  
    
       $('.first_crmb').on('click', function () {
        const breadcrumbsTwo = "";
        sessionStorage.setItem('breadcrumbsTwo', JSON.stringify(breadcrumbsTwo));
        const breadcrumbs = "";
        sessionStorage.setItem('breadcrumbs', JSON.stringify(breadcrumbs));
    })

    
    
    
//Хлебные крошки cookies jquery
   для работы скачать и подключить плагин jquery.cookie
   
    $('.menu_crmb').on('click', function () {
        $.cookie('breadcrumbsTwo', ' ');
        $.cookie('breadcrumbs', ' ');
        $.cookie('breadcrumbs', $(this).text());
    })
    $('.secnd_crmb').text($.cookie('breadcrumbs'));
  
    
    $('.subMenu_crmb').on('click', function () {
        $.cookie('breadcrumbsTwo', ' ');
        $.cookie('breadcrumbsTwo', $(this).text());
    })
    $('.third_crmb').text($.cookie('breadcrumbsTwo'));
    
    
    $('.first_crmb').on('click', function () {
        $.cookie('breadcrumbsTwo', ' ');
        $.cookie('breadcrumbs', ' ');
    })
    */                     
});