<?php

class mangoJuice_more_posts_Widget extends WP_Widget {

    function mangoJuice_more_posts_Widget() {
        parent::WP_Widget(false, 'More posts');
    }

    function form($instance) {
        // outputs the options form on admin
        $title = esc_attr($instance['title']);

        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
    <?php
    }

    function update($new_instance, $old_instance) {
        // processes widget options to be saved
        return $new_instance;
    }

    function widget($args, $instance) {


        $mangoJuice_article = [
            "id"        => get_the_ID(),
            "category"  => get_category( get_the_category()[0]->parent )
        ];

        echo $instance['title'];

        if( $instance['title'] != NULL ){
            $args['title'] = $instance['title'];
        } else {
            $args['title'] = $mangoJuice_article['category']->name;
        }

        //  Get the posts Query
        $my_query = new WP_Query( 'category_name=' . $mangoJuice_article['category']->slug );

        echo "<li><header>";
        echo "<h3>" . $args['title'] . "</h3>";
        echo "<a href='" . esc_url(get_category_link(get_cat_ID( $mangoJuice_article['category']->slug ))) . "' class='more'> MEER </a>";
        echo "</header>";
            echo "<ul class='card-mini'>";

            //  Loop trough the post query
            while ( $my_query->have_posts() ) : $my_query->the_post();

                if( get_the_ID() != $mangoJuice_article['id'] ){

                    //  Print the post data in the preset format
                    get_template_part( 'modules/module', 'card_mini');

                }
            endwhile;

            echo "</ul>";
        echo "</li>";

        // outputs the content of the widget

    }

}

function register_mangoJuice_more_posts_Widget(){
    register_widget('mangoJuice_more_posts_Widget');
}

add_action( 'widgets_init', 'register_mangoJuice_more_posts_Widget');

//
//// register Foo_Widget widget
//function register_foo_widget() {
//    register_widget( 'Foo_Widget' );
//}
//add_action( 'widgets_init', 'register_foo_widget' );