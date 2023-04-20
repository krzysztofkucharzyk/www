(function($){
    /* If this line runs, it means Javascript is enabled in the browser
     * so replace no-js class with js for the body tag
     */
    document.body.className = document.body.className.replace("no-js","js");
 
     
   /* -----------------------------------------------------------------*/
   /* Activate accessible superfish
   /* -----------------------------------------------------------------*/
   $('.primary-navigation').find('.menu').superfish({
       smoothHeight : true,
       delay : 600,
       animation : {
          opacity :'show',
          height  :'show'
       },
       speed : 'fast', 
       cssArrows: false
   });
     
 /* -----------------------------------------------------------------*/
/* Add Placeholder to the Email input field of "Email Subscribers" widget
/* -----------------------------------------------------------------*/
if( $( '.widget input[type="email"]' ).length ){
    $( '.widget input[type="email"]' ).attr('placeholder', translated_text_object.email_placeholder);
}

if( $( '.widget input[type="text"]' ).length ){
    $( '.widget input[type="text"]' ).attr('placeholder', translated_text_object.name_placeholder);
}




})(jQuery);


