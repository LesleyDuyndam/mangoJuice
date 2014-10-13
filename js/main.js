
/**
 * Main.js is the base js file suitable for multiple Wordpress themes
 * a basic file with some variables and filters
 * @type {HTMLElement}
 */

if( device.mobile() ){

    var body    = jQuery('#body'),
        header  = jQuery('#header');

    jQuery('header button')
        .click( function(){
            console.log("Knop geklikt!");
            darkBox = jQuery("#darker-back");

            if ( header.hasClass('active') ){

                header.removeClass('active');
                darkBox .remove();

            } else {

                header.addClass('active');
                body    .append( jQuery('<div/>', { id: 'darker-back'} ));

            }
        });

    // Zet scroll uit wanneer het menu actief is

    console.log(body);

    jQuery( window ).scroll(function(){

        if( jQuery('#header').hasClass('active') ){

            //console.log(body);
            var style = {
                position: 'fixed'
                //top: '-' + body.context.body.scrollHeight + 'px'
            };

            body.css(style);
        } else {
            body.css('position', 'static');
            //console.log('Er is gescrolld');
        }
    });
}
