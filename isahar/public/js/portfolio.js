$(function () {
	
      $('.card-img-overlay').on({
          'mouseenter':function(){
             var child = $(this).parent().children('.img-card');
             var text = $(this).children('.card-title');
             var camera = $(this).children('.camera');
             $(child).css({'filter': 'blur('+0+'px)', transition: "0.5s"});
             $(text).css({'opacity': 0, transition: "0.5s"});
             $(camera).css({'opacity': 0.6, transition: "0.5s"});
           
       },
           'mouseleave':function(){
             var child = $(this).parent().children('.img-card');
             var text = $(this).children('.card-title');
             var camera = $(this).children('.camera');
             $(child).css({'filter': 'blur('+4+'px)', transition: "0.5s"});
             $(text).css({'opacity': 1, transition: "0.5s"});  
             $(camera).css({'opacity': 0, transition: "0.5s"});
       }
         
      })
    
});