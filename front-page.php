<?php
/**
 * The template designed for the front page of Being Human
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Being_Human
 */

get_header(); ?>
<?php global $more; $more = 0;  ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
args here

				<?php 
					$args = array(
					'sort_order' => 'asc',
					'sort_column' => 'post_title',
					'hierarchical' => 1,
					'exclude' => '',
					'include' => '',
					'meta_key' => '',
					'meta_value' => '',
					'authors' => '',
					'child_of' => 0,
					'parent' => 0,
					'exclude_tree' => '',
					'number' => '',
					'offset' => 0,
					'post_type' => 'page',
					'post_status' => 'publish'
); 
$pages = get_pages($args);
foreach( $pages as $page ) {	
		
		$content = $page->post_content;
		// Get content parts
		$content_parts = get_extended( $content );
		if ( ! $content ) // Check for empty page
			continue;
		
	$content = apply_filters( 'the_content', $content );
	?>	
		<section id="<?php echo $page->post_name; ?>" class="<?php echo $page->ID; ?>">
		<h2 class="section-header"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="section-entry"><?php echo $content_parts['main']; ?></div>
		</section>
	<?php
	}	
?> 
</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
