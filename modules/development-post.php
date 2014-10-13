<?php
/** The posts template file */

global $count;

if( $count === 0 ){
    ?>
    <ul class="cheat">
        <li>Nummer </li>
        <li>the_ID()</li>
        <li>echo get_post_class()[0]</li>
        <li>the_title()</li>
        <li>the_title_attribute()</li>
        <li>the_guid()</li>
        <li>the_permalink() </li>
        <li>the_category()</li>
        <li>echo get_the_category_list()</li>
        <li>echo get_the_category()[0]->term_id</li>
        <li>echo get_category_link( ->term_id )</li>
        <li>echo get_the_category()[0]->name</li>
        <li>echo get_the_category()[0]->parent</li>
        <li>the_tags()</li>
        <li>the_attachment_link()</li>
        <li>the_time()</li>
        <li>the_date()</li>
        <li>the_date_xml()</li>
        <li>the_weekday_date()</li>
        <li>the_author()</li>
        <li>the_author_link()</li>
        <li>the_author_posts()</li>
        <li>the_author_posts_link()</li>
        <li>the_feed_link( 'Feed Link..' )</li>
        <li>the_generator( 'html' )</li>
        <li>the_post_thumbnail()</li>
        <li>echo get_adjacent_post_link()</li>
        <li>echo get_template_directory()</li>
        <li>echo get_template_directory_uri()</li>

    </ul>
    <?php
}

?>


<ul class="cheat">
    <li><?php echo $count ;?></li>
    <li><?php the_ID(); ?></li>
    <li><?php echo get_post_class()[0]; ?></li>
    <li><?php the_title(); ?></li>
    <li><?php the_title_attribute() ; ?> </li>
    <li><?php the_guid() ; ?></li>
    <li><?php the_permalink() ; ?></li>
    <li><?php the_category(); ?></li>
    <li><?php echo get_the_category_list( '/' ) ; ?></li>
    <li><?php echo get_the_category()[0]->term_id ; ?></li>
    <li><?php echo get_category_link( get_the_category()[0]->term_id ) ; ?></li>
    <li><?php echo get_the_category()[0]->name ; ?></li>
    <li><?php echo get_the_category()[0]->parent ; ?></li>
    <li><?php the_tags("<ul><li>", "</li><li>", "</li></ul>"); ?></li>
    <li><?php the_attachment_link(); ?></li>
    <li><?php the_time(); ?></li>
    <li><?php the_date(); ?></li>
    <li><?php the_date_xml() ; ?></li>
    <li><?php the_weekday_date() ; ?></li>
    <li><?php the_author(); ?></li>
    <li><?php the_author_link(); ?></li>
    <li><?php the_author_posts(); ?></li>
    <li><?php the_author_posts_link() ; ?></li>
    <li><?php the_feed_link("Feed Link..") ; ?></li>
    <li><?php the_generator( 'html' ) ; ?></li>
    <li><?php the_post_thumbnail() ; ?></li>
    <li><?php echo get_adjacent_post_link( true, "", false, 'portfolio') ; ?></li>
    <li><?php echo get_template_directory() ; ?></li>
    <li><?php echo get_template_directory_uri() ; ?></li>


</ul>


    <?php

//                $category = get_the_category();
//
//                for( $i = count($category) - 1; $i >= 0; $i--){
//
//                    for( $x = count( $category[$i] ) - 1; $x >= 0; $x-- ){
//
//                    }
//                    echo "<table>";
//
//                    echo "<tr><li>term_id</li><li>";
//                    echo $category[$i]->term_id;
//                    echo "</li></tr>";
//
//
//                }

//                var_dump( get_the_category() );
                


$count++;