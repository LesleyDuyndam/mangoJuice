
var scroll = {
        "track" :   window.scrollY,
        "object":   jQuery( ' #img-header ' ),
        "speed" :   0.7
    },
    stop = scroll.object[0].offsetHeight * 2;

if ( device.tablet() || device.desktop() ){
    scroll.speed = scroll.speed * 1
}

jQuery( window )
    .scroll( function(){

        scroll.track = window.scrollY;

        if( scroll.track < stop && scroll.track >= 0  ) {
            scroll.track = ( -1 * scroll.track ) * scroll.speed;

            scroll.object
                .css({
                    'top'   : scroll.track + "px"
                });
        }
});