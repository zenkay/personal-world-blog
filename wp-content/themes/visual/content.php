<?php
/**
 * @package Visual
 * @since Visual 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
	<figure class="visual-thumbnail">
		<a href="<?php the_permalink() ?>" class="thumbnail">
		<?php $thumbnail = get_the_post_thumbnail( null, 'visual-thumbnail' ); ?>
		<?php echo visual_postload_thumbnail( $thumbnail ); ?>
		</a>
	</figure>
	<?php } ?>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'visual' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php visual_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'visual' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta clearfix">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link">
		<?php comments_popup_link( '', '', '', 'icon-comment' ); ?>
		<?php comments_popup_link( __( 'Comment', 'visual' ), __( '1 Comment', 'visual' ), __( ' % Comments', 'visual' ) ); ?>
		</span>
		<?php endif; ?>
		<span class="post-link">
			<a href="<?php the_permalink(); ?>"><span class="icon-right-circled"></span><span class="visuallyhidden"><?php the_title(); ?></span></a>
		</span>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
