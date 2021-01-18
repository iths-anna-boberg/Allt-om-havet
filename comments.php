<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
		<p class="aoh-comments-title">
			<?php _e('Kommentarer', 'noto-simple'); ?>
		</p>

		<?php
        the_comments_navigation(array(
            'prev_text' =>'<i class="material-icons">navigate_before</i><span class="hidden-sm">' . __('Äldre kommentarer', 'noto-simple') . '</span>',
            'next_text' => '<span class="hidden-sm">' . __('Senare kommentarer', 'noto-simple') . '</span><i class="material-icons">navigate_next</i>',
        )); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
                    'avatar_size' => 32,
				) );
			?>
		</ol>

		<?php 
        the_comments_navigation(array(
            'prev_text' =>'<i class="material-icons">navigate_before</i><span class="hidden-sm hidden-md">' . __('Äldre kommentarer', 'noto-simple') . '</span>',
            'next_text' => '<span class="hidden-sm hidden-md">' . __('Senare kommentarer', 'noto-simple') . '</span><i class="material-icons">navigate_next</i>',
        ));

		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Kommentarsfältet stängt', 'noto-simple' ); ?></p>
		<?php
		endif;

	endif;

	comment_form();
	?>

</div>