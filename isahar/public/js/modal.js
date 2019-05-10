$(function () {
	
      $('.modal_screen').on({
          'click':function(event){
             event.preventDefault(); // отменяем ссылку
            var img = $(this).children().attr('src');

            $('.modal-content').html('<img class="img-fluid" src="'+ img +'">');
       }
         
      })

        $('.modal-content').on({
          'click':function(){
           $('.modal').modal('hide');
       }
         
      })
    
});