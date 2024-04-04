<?php get_header(); ?>
	<h1>FRONT-PAGE</h1>



	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h2><?php the_title(); ?></h2>

    	<h3 id="bienvenue">BIENVENUE SUR MON CV</h3>
    	
		<?php the_content(); ?>

		<div id="sidebar">
			<?php dynamic_sidebar('blog-sidebar'); ?>
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
