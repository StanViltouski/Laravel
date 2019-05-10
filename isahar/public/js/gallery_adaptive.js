   $(window).on('resize', function() {

      var widthCurrent = window.innerWidth;

         if (widthCurrent > 1910) {

          var percentWidth = widthCurrent/100,
    
          columns = {
            column1 : 316/percentWidth+"vw",
            column2 : 454/percentWidth+"vw",
            column3 : 279/percentWidth+"vw",
            column4 : 342/percentWidth+"vw",
            column5 : 289/percentWidth+"vw"
          },

          rows = {
            row1 : 306/percentWidth+"vw",
            row2 : 107/percentWidth+"vw",
            row3 : 41/percentWidth+"vw",
            row4 : 1/percentWidth+"vw",
            row5 : 4/percentWidth+"vw",
            row6 : 438/percentWidth+"vw"
          },

             gap = 10/percentWidth+"vw";

         $('#gallery').css({
             "grid-template-columns": columns.column1+" "+columns.column2+" "+columns.column3+" "+columns.column4+" "+columns.column5,
             "grid-template-rows": rows.row1+" "+rows.row2+" "+rows.row3+" "+rows.row4+" "+rows.row5+" "+rows.row6,
             "-ms-grid-columns": columns.column1+" "+gap+" "+columns.column2+" "+gap+" "+columns.column3+" "+gap+" "+columns.column4+" "+gap+" "+columns.column5,
             "-ms-grid-rows": rows.row1+" "+gap+" "+rows.row2+" "+gap+" "+rows.row3+" "+gap+" "+rows.row4+" "+rows.row5+" "+gap+" "+rows.row6,
             "grid-gap": gap
            });
         } else {return;}

    });

$(window).bind('load', function(){
    $(window).trigger('resize');
});

    
