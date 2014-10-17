jQuery( function(){

    /**
     * Main javascript file.
     * @type {HTMLElement}
     */



    function INTRO(){


        this.video = function(){

            jQuery( ' #intro ' )
                .html( "<div id='intro_container'/>" );


            jQuery( ' #intro_container ' )
                .html( '<video autoplay="true" loop="true" />' );


            jQuery( ' #intro_container video ' )
                .html(
                " <source src='" + wordpress.template_url + "/clips/intro_mini.mp4' type='video/mp4' >",
                " <source src='" + wordpress.template_url + "/clips/intro_converted.webm' type='video/webm' >");

        };


        this.img = function(){

            jQuery( ' #intro ' )
                .html( " <img src='" + wordpress.template_url + "/svg/LesleyDuyndam.svg' id='intro_img'/>" );

        };

    }


    var intro = new INTRO();


    if( ! device.mobile() ){

        intro.video();

    }

});





