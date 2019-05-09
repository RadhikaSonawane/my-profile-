<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header text-center">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta text-center">
			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
    <div class="text-center">
		<?php echo get_the_post_thumbnail( $post->ID, 'post-thumbnail size' ); ?>
    </div>
	<div class="entry-content text-center">
		<?php the_content(); ?>
		<?php
				$link = get_field('link');
				if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<a class="btn btn-danger" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title);?> <?php _e( 'See Portfolio Detail', 'understrap' ); ?></a>
    <?php endif; ?>



	</div><!-- .entry-content -->



</article><!-- #post-## -->
