<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Concept
 * @since 1.0.0
 */

$discussion = /*! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : */ null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">

	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			twentynineteen_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php  ?>
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">', '</span>');
	?>
</div><!-- .entry-meta -->
<?php endif; ?>
