// Wordpress takes the object build by php.
function WORDPRESS(){

    // Store the template url
    this.template_url = wordpress_data.template_url;

}

var wordpress = new WORDPRESS();


jQuery( function(){

    /**
     * Main javascript file.
     * @type {HTMLElement}
     */


    console.log( wordpress.template_url );

    //if( ! device.mobile() ){
    //
    //    var $newdiv1 = $( "<div id='object1'/>" ),
    //        newdiv2 = document.createElement( "div" ),
    //        existingdiv1 = document.getElementById( "foo" );
    //
    //    $( "body" ).append( $newdiv1, [ newdiv2, existingdiv1 ] );
    //
    //    var intro_container = jQuery( "<div id='intro_container'/>"),
    //        theme_src =
    //
    //
    //    jQuery( ' #intro ' )
    //        .append( '<p>', 'Hier komt de afbeeldig!' );
    //
    //}


});
