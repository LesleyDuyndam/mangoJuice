var main_nav = jQuery( ' #main_nav '),
    header  = jQuery( ' #header_wrapper ' );

main_nav
    .detach()
    .appendTo( header );
