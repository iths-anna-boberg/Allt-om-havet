<?php if($comments) : ?>
	<ol>

  	<?php foreach($comments as $comment) : ?>
		<li id="comment-<?php comment_ID(); ?>">
			<?php if ($comment->comment_approved == '0') : ?>
				<p>Din kommentar inväntar godkännande.</p>
			<?php endif; ?>
			<?php comment_text(); ?>
			<cite><?php comment_type(); ?> av <?php comment_author_link(); ?> <?php comment_date(); ?> vid <?php comment_time(); ?></cite>
		</li>
	<?php endforeach; ?>

	</ol>
<?php else : ?>
	<p>Inga kommentarer än.</p>
<?php endif; ?>