  $(function() {

//адаптивная галлерея 
  
				var animations = ['right','left','top','bottom','rightFade','leftFade','topFade','bottomFade'];
				var total_anim = animations.length;
				var easeType = 'swing';
				var animSpeed = 950;
				var gallery = $('#gallery');
				var hs_areas = gallery.find('.gallery_block');
			    var timer = null;
				
				// предзагрузка img
                hs_images = gallery.find('img');
                var total_images = hs_images.length;
                var cnt = 0;

                hs_images.each(function(){
                    var $this = $(this);
                    $('<img/>').on('load', function(){
                        ++cnt;
                        if(cnt == total_images){
							hs_areas.each(function(){
								var area = $(this);

								area.data('over',true).bind('click',function(){
									if(area.data('over')){
										area.data('over',false);
										//количество картинок
										var total = area.children().length;
										//видимые картинки
                                        var current = area.find('img:visible');
										//индкс видимых картинок
										var idx_current = current.index();
										var next = (idx_current == total-1) ? area.children(':first') : current.next();
										next.show();
										//рандомный тип анимации
										var anim = animations[Math.floor(Math.random()*total_anim)];

										switch(anim){
											//анимация вправо
											case 'right':
												current.animate({
													'left':current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация влево
											case 'left':
												current.animate({
													'left':-current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация вверх	
											case 'top':
												current.animate({
													'top':-current.height()+'px'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'top'		: '0px'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация вниз	
											case 'bottom':
												current.animate({
													'top':current.height()+'px'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'top'		: '0px'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация вправо + fade
											case 'rightFade':
												current.animate({
													'left':current.width()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'left'		: '0px',
														'opacity'	: '1'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация влево + fade	
											case 'leftFade':
												current.animate({
													'left':-current.width()+'px','opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'left'		: '0px',
														'opacity'	: '1'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация вверх + fade
											case 'topFade':
												current.animate({
													'top':-current.height()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'top'		: '0px',
														'opacity'	: '1'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
											//анимация вниз + fade
											case 'bottomFade':
												current.animate({
													'top':current.height()+'px',
													'opacity':'0'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'top'		: '0px',
														'opacity'	: '1'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;		
											default:
												current.animate({
													'left':-current.width()+'px'
												},
												animSpeed,
												easeType,
												function(){
													current.hide().css({
														'z-index'	: '1',
														'left'		: '0px'
													});
													next.css('z-index','9999');
													area.data('over',true);
												});
												break;
										}	
									}
								});
							});
							
						} 
					}).attr('src',$this.attr('src'));
				});	

				//автослайдер

            var counter=-1;		

            timer = setInterval(function () {
            	  var imgarr = [0, 5, 7, 3, 8, 1, 2, 4, 6];
                  counter++;
              
            	  if(counter <= imgarr.length) {
                     $(hs_areas[imgarr[counter]]).trigger('click');
            	  } else {counter=-1;}

            }, 4000);
  
});