<?php
/**
 * Template Name: 게시판 샘플
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package doughnut
 */

get_header(); ?>

	<div id="primary" class="content-area f_l grid_65">
		<div id="content" class="site-content" role="main">

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>

		<table class="d_table type_board">
		    <!-- <colgroup>
		        <col width="70">
		        <col width="200">
		        <col width="200">
		    </colgroup> -->
		    <thead>
		        <tr>
					<th>번호</th>
					<th width="50%">제목</th>
					<th>작성자</th>
					<th>날짜</th>
					<th>조회수</th>
					<th>댓글수</th>
		        </tr>
		    </thead>
		    <tbody>
			<?php
		
			$args = array(
				'category_name' => get_query_var('pagename'), 
				'posts_per_page' => 5, 
				'paged' => get_query_var('paged')	
			);
 
			// The Query
			query_posts( $args );
 
			// The Loop
			while ( have_posts() ) : the_post(); ?>
				<tr>
					<td><?php the_ID(); ?></td>
					<td><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
					<td><?php the_author(); ?></td>
					<td><?php the_modified_date('Y.m.d') ?></td>
					<td style="text-align: center;"><?php echo get_post_views(get_the_ID()); ?></td>
					<td style="text-align: center;"><?php comments_number( '0', '1', '%' ); ?></td>
				</tr>
			
			<?php endwhile; ?>
			</tbody>
		</table>
		
		<?php
			// WP-PageNavi
			if ( function_exists('wp_pagenavi') ) {
				wp_pagenavi( $args );
			}
 
			// Reset Query
			wp_reset_query();
		?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
