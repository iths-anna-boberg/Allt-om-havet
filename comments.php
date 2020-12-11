<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php _e('Comments', 'noto-simple'); ?>
		</h2>

		<?php
        the_comments_navigation(array(
            'prev_text' =>'<i class="material-icons">navigate_before</i><span class="hidden-sm">' . __('Older comments', 'noto-simple') . '</span>',
            'next_text' => '<span class="hidden-sm">' . __('Newer comments', 'noto-simple') . '</span><i class="material-icons">navigate_next</i>',
        )); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
                    'avatar_size' => 32,
				) );
			?>
		</ol>

		<?php 
        the_comments_navigation(array(
            'prev_text' =>'<i class="material-icons">navigate_before</i><span class="hidden-sm hidden-md">' . __('Older comments', 'noto-simple') . '</span>',
            'next_text' => '<span class="hidden-sm hidden-md">' . __('Newer comments', 'noto-simple') . '</span><i class="material-icons">navigate_next</i>',
        ));

		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'noto-simple' ); ?></p>
		<?php
		endif;

	endif;

	comment_form();
	?>

</div>