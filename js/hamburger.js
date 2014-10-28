jQuery( function(){

    /**
     *
     *  HAMBURGER.JS
     *
     * ------------------------
     *
     *  Author:
     *  Lesley Duyndam
     *
     *  -----------------------
     *
     *  Requires:
     *  jQuery
     *      - device.min.js
     *
     * ------------------------
     *
     *
     *  The hamburger.js jQuery plugin adds a hamburger button in the main navigation.
     *  On click:
     *
     *  1.  Switch the src of the img.
     *      "burger.svg" (default)
     *      "exit.svg"
     *
     *  2.  Switch the class of the nav. (default)
     *      "open"
     *      "closed"
     *
     * ------------------------
     *
     */

    if( device.mobile() || device.tablet() && device.portrait() ) {


        // Add the img#navigation_button to the header navigation
        jQuery(' header#header ' )
            .append( "<img src='" + wordpress.template_url + "/svg/burger.svg' id='navigation_button' alt='Burger icon' />" );

        jQuery( ' header#header h2 ' )
            .remove();

        jQuery( ' section.breadcrumbs ' )
            .remove();


        /**
         *
         * @constructor
         */
        function NAV_BUTTON(){



            // Make root this Global.
            var _this = this;



            // Get the button element
            this.element        = jQuery( ' #navigation_button ' );

            // Get the image source as a string
            this.attr           = this.element.attr( 'src' );

            // Set the burger Flag; default = TRUE;
            this.burger         = true;



            // Callback when button is clicked
            this.click = function () {

                if(_this.burger ) {

                    // Prepare the new attr to change to exit
                    this.attr = this.attr.replace('burger', 'exit');

                    // Call the menu open function
                    menu.open();

                    // Change Flag
                    this.burger = false;



                } else {

                    // Prepare the new Attr to change to burger
                    this.attr = this.attr.replace('exit', 'burger');

                    // Call the menu close function
                    menu.close();

                    // Change Flag
                    this.burger = true;



                }



                // Push the new attr to the element.
                _this.element
                    .attr( 'src', _this.attr );



            };



        }







        /**
         *
         * @constructor
         */
        function NAV_MENU(){



            // Make root this Global.
            var _this = this;



            // Get the menu
            this.menu       = jQuery( ' #header ' );



            // Change the nav status flag to open
            this.open = function(){

                _this.menu
                    .attr( 'class', 'open' );



            };



            // Change the nav status flag to closed
            this.close = function(){

                _this.menu
                    .attr( 'class', 'closed' );



            };



        }



        var menu = new NAV_MENU();
        var button = new NAV_BUTTON();



        // Close the menu on pageload
        menu.close();



        // Call the events on close
        jQuery('#navigation_button')
            .click(function () {
                button.click();



            });

        jQuery( )




        // Check if window is smaller
    }



});