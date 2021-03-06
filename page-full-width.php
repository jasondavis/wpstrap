<?php
/*
Template Name: Full Width Page
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main-full' ); ?>" id="main-col">
		<?php wpstrap_breadcrumbs( 'page' ); ?>
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post(); ?>				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php wpstrap_single_header( 'page' ); ?>
					<div class="wysiwyg">
						<?php the_content(); ?>
					</div>
					<?php 
					if( !post_password_required() && wpstrap_opt( 'show_page_comments' ) == '1' ) { 
						comments_template();
					}
					?>
				</div>				
			<?php endwhile; ?>			
		<?php endif; ?>
	</div>	
</div>
<?php get_footer(); ?>