<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package doughnut
 */

get_header(); ?>

	<div id="primary" class="content-area f_l grid_65">
		<div id="content" class="site-content" role="main">

		<!-- <h3>Features Posts</h3>
		<ul class="group_thumb">
			<li>
				<img src=""/>
				<span class="caption">아무거나 하나쯤</span>
			</li>
		</ul>	 -->

		<h3>Recent Posts</h3>	

		<?php if ( have_posts() ) : ?>

			<ul class="d_list type_article type_border">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					// get_template_part( 'content', get_post_format() );
				?>
				
			    <li>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( array(100,), array('class' => 'article_thumb f_l' )); } ?> 
			        <div class="article_text">
			            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
			        </div>
			    </li>				

			<?php endwhile; ?>
			</ul>

			<?php //wp_pagenavi(); ?>
			<?php doughnut_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>