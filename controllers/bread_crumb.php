<?php
if( ! function_exists('mangoJuice_breadCrumbs')) {

    /**
     * !IMPORTANT
     * Snippet must be placed inside the loop
     *
     * @param $spacer
     */

    function mangoJuice_breadcrumbs( $spacer ) {
        global $post;
        global $crumbs;

        /**
         *  1.  First of all, lets build a Array with the name & links in reversed order.
         */

        // Don't show breadcrumbs on homepage. This is the Root of the hierarchy
        if ( !is_home()) {


            //  Initialize the array
            $crumbs = array();






            /**
             * @param $id = Category ID
             *
             * Accepts the ID of the current active single.php/ category.php category.
             *
             * Side-effect: Pushes the active category and his parents to the $crumbs array() for later processing .
             */
            function mangoJuice_get_parents( $id ) {


                global $crumbs;

                //  Get the first parent category by its ID
                $parent = get_term( $id, 'category' );


                if ( is_wp_error( $parent ) )
                    return $parent;

                //  For testing purposes, default is "commented"
//                echo "page_id = " . (int)$id . "</br>";
//                echo "page_name = " . $parent->name . "</br>";
//                echo "page_url = " . esc_url( get_category_link( $parent->term_id ) ) . "</br>";
//                echo "page_parent_id = " . $parent->parent . "</br>";



                if ( $parent->parent != $parent->term_id ) {

                    array_push( $crumbs, array(
                        "name"      => $parent->name,
                        "url"       => esc_url( get_category_link( $parent->term_id ) )
                    ));

                    mangoJuice_get_parents( $parent->parent);
                }

            };







            function mangoJuice_get_page_parents( $id ) {


                global $crumbs;

                $page = get_post( $id );

                //  For testing purposes, default is "commented"
//                echo "page_id = " . (int)$id . "</br>";
//                echo "page_name = " . $page->post_title . "</br>";
//                echo "page_url = " . $page->guid . "</br>";
//                echo "page_parent_id = " . (int)wp_get_post_parent_id($id) . "</br>";




                // Go back to root parent by parent. Push the url & name each step tu $crumbs
                if ( (int)wp_get_post_parent_id($id) != (int)$id ) {

                    array_push($crumbs, array(
                        "name" => $page->post_title,
                        "url" => $page->guid
                    ));

                    // If parent is not root, redo function
                    if( wp_get_post_parent_id($id) != 0 )
                        mangoJuice_get_page_parents( wp_get_post_parent_id($id) );
                }
            };













            // Add archive
            if ( is_archive() && !is_category() ){ array_push( $crumbs, array( 'name' => "Archives" )); };


            // Add search results
            if (is_search()){ array_push( $crumbs, array( 'name' => "Search Results" )); };


            // Add error
            if (is_404()){ array_push( $crumbs, array( 'name' => "Page not found ('404')" )); };

            // Add the category in order to $crumbs array()
            if( is_category() ){

                mangoJuice_get_parents(get_cat_ID(single_cat_title('', false))) ; };

            // Add the title of the page first
            // Add the single pages in order to $crumbs array()
            if( is_single() ){

                array_push( $crumbs, array(
                    "name"      => get_the_title()
                ));

                mangoJuice_get_parents( get_cat_ID( get_the_category()[0]->name ));

            }

            if ( is_page() ) {

                array_push( $crumbs, array(
                    "name"      => get_the_title()
                ));

                mangoJuice_get_page_parents( wp_get_post_parent_id($post->ID) );
            };



        }

//      The array will be printed in revers, so add site info last.
        array_push( $crumbs, array(
            "name"      => get_bloginfo( 'name' ),
            "url"       => get_bloginfo( 'url')
        ) );


        /**
         *  2.  Second, build the HTML with the data in the array
         */

        $crumbleTrack = "";

        for($i = count($crumbs) - 1; $i >= 0; $i--){

            if( $i === count($crumbs) - 1 ){

                if( is_string( $crumbs[$i]['url'] ) ){
                    $crumbleTrack .= "<div itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href=" . $crumbs[$i]['url'] . " itemprop='url' ><span itemprop='title'>" . $crumbs[$i]['name'] . "</span></a>" . $spacer;

                } else {
                    $crumbleTrack .= "<div itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>" .$crumbs[$i]['name'] . "</span>";
                }

            } else {

                if( is_string( $crumbs[$i]['url'] ) ){
                    $crumbleTrack .= "<div itemprop='child' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href=" . $crumbs[$i]['url'] . " itemprop='url' ><span itemprop='title'>" . $crumbs[$i]['name'] . "</span></a>" . $spacer;

                } else {
                    $crumbleTrack .= "<div itemprop='child' itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><span itemprop='title'>" .$crumbs[$i]['name'] . "</span>";
                }
            }



            if ( $i === 0) {
                for($x = 0; $x < count($crumbs); $x++){

                    $crumbleTrack .= "</div>";
                }
            }

        }

        echo $crumbleTrack;
    }
};