var scroll = {
        "track" :   window.scrollY,
        "object":   jQuery( ' #img-header ' ),
        "speed" :   0.6
    },
    stop = scroll.object[0].offsetHeight * 2;

jQuery( window )
    .scroll( function(){

        scroll.track = window.scrollY;

        if( scroll.track < stop ) {

            console.log( "scrol track = " + scroll.track );
            console.log( "stop        = " + stop );

            scroll.track = ( -1 * scroll.track ) * scroll.speed;

            scroll.object
                .css({'top': scroll.track + "px"});
        }
});


// Is the user scrolling? flag true

//
///**
//* If (window y === stop) flag scrolling false
//* If scrolling
//*  -   Request animation frame
//*      -   get the window Y position
//*          -
//  */
//
//
//function SCROLL_ANIMATE(){
//
//    var _this = this;
//
//    this.index  = new Array();
//    this.track  = -1 * window.scrollY;
//    this.working = false;
//
//
//
//    // shim layer with setTimeout fallback
//    window.requestAnimFrame = (function(){
//        return  window.requestAnimationFrame    ||
//        window.webkitRequestAnimationFrame      ||
//        window.mozRequestAnimationFrame         ||
//        function( callback ){
//            window.setTimeout(callback, 1000 / 60);
//        };
//    })();
//
//
//
//    this.add = function(object, speed){
//        _this.index.push({
//            "object"    : object,
//            "speed"     : speed,
//            "start"     : object[0].offsetTop,
//            "stop"      : object[0].offsetHeight,
//            "current"   : object[0].offsetTop
//        });
//
//        console.log( "start = " + this.index[0].start );
//        console.log( "stop  = " + this.index[0].stop );
//    };
//
//
//    jQuery( window )
//        .scroll( function(){
//
//            _this.working = true;
//
//        } );
//
//    (function animloop(){
//        requestAnimFrame(animloop);
//        render();
//    })();
//
//
//    function render(){
//        if( _this.working ) {
//            _this.track = -1 * window.scrollY;
//
//            for (var i = 0; i < _this.index.length; i++) {
//
//                var element = _this.index[i];
//
//                if ( element.current <= element.stop) {
//                    _this.working = false;
//                }
//
//                if ( _this.track < element.stop ) {
//
//                    if (_this.track > element.current) {
//                        element.current = element.current + element.speed;
//
//                        element.object
//                            .css({'top': element.current + "px"})
//
//                    } else if (_this.track < element.current) {
//                        element.current = element.current - element.speed;
//
//                        element.object
//                            .css({'top': element.current + "px"});
//                    }
//
//                    console.log("Er wordt gescrold binnen de perken!");
//
//                }
//            }
//        }
//
//        console.log("Hello World!");
//    }
//
//}
//
//var scroll = new SCROLL_ANIMATE();
//
//
//scroll.add( jQuery( ' #img-header ' ), 100 );