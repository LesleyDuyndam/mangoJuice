jQuery( function(){

    /**
     * @type {HTMLElement}
     */


    if( device.mobile() || device.tablet() && device.landscape() ) {


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



    }



});