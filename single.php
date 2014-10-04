<?php /** The single template file */

get_template_part( 'modules/module', 'header' ) ;?>

<section class="single-post">
    <?php while (have_posts()) : the_post(); ?>
	        <header>

		        <?php echo get_the_post_thumbnail(); ?>
		        <h3 class="img-overlay"><?php the_title(); ?></h3>

	        </header>

	        <article>

		        <?php $category = get_the_category(); ?>
		        <h4 class="category_style"><?php echo $category[0]->cat_name; ?></h4>
		        <?php echo the_content() ;?>

	        </article>

	        <footer>

		        <?php if(true) : ?>
			        <a href="<?php echo "#" ;?>">Bekijk de live website!</a>
		        <?php endif; ?>

	        </footer>

<!--        <section>-->
<!--            --><?php //comments_template(); ?>
<!--        </section>-->

        <section class="page-nav">

	        <?php get_template_part( 'snippets/snippet', 'pagenav' ) ;?>

        </section>

    <?php endwhile; ?>
</section>

<?php get_template_part( 'modules/module', 'footer' ) ;?>