
$(function() {
    
    $('.designBody_text p').fadeTo(1000, 1).addClass('show');
    
	$('.designBlocks_item div').on({
        'mouseenter':function(){
            var text = $(this).children()[0];
            var button = $(this).children()[1];
                $(text).css({
                    'margin-top':'0px',
					 transition: "0.7s"
                })
            
            $(button).css({
                   'margin-top':'170px',
                   'opacity':'1',
				    transition: "0.7s"
            });
        },
           'mouseleave':function(){
            var text = $(this).children()[0];
            var button = $(this).children()[1];
                $(text).css({
                    'margin-top':'155px',
					 transition: "0.7s"
                })
               
                $(button).css({
                   'margin-top':'165px',
                   'opacity':'0',
				    transition: "0.7s"
            });
        }
    })
    
 
});