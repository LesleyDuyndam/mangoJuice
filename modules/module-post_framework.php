<?php
/** The posts template file */

global $count;?>

    <table>
        <tr>
            <td>Post number</td>
            <td>the_title()</td>
<!--            <td>the_content()</td>-->
            <td>the_category()</td>
            <td>the_author()</td>
            <td>the_author_meta()</td>
            <td>the_attachment_link()</td>
            <td>the_tags()</td>
            <td>the_time()</td>
        </tr>
        <tr>
            <td><?php echo $count ;?></td>
            <td><?php the_title(); ?></td>
<!--            <td>--><?php //the_content(); ?><!--</td>-->
            <td><?php the_category(); ?></td>
            <td><?php the_author(); ?></td>
            <td><?php the_author_meta(); ?></td>
            <td><?php the_attachment_link(); ?></td>
            <td><?php the_tags(); ?></td>
            <td><?php the_time(); ?></td>
        </tr>
    </table>

        <?php

$count++;