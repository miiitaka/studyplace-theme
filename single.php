<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) :
			the_post();
			?>
			<section class="l-contents__contribution" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
				<div class="contents__contribution">
					<?php
					$html  = '';
					$html .= '<div class="contents__contribution-date">' . get_the_time( 'Y.m.d' ) . '</div>';
					$html .= '<h2 class="contents__contribution-title">' . get_the_title() . '</h2>';
					$html .= '<div class="contents__contribution-link">';
					$html .= '<div class="contents__contribution-link-category">category' . get_the_category_list() . '</div>';
					$html .= '<div class="contents__contribution-link-author">author<span>' . get_the_author() . '</span></div>';
					$html .= '</div>';
					echo $html;
					?>
				</div>
			</section>
			<section class="l-contents__contribution-detail">
				<div class="contents__contribution-detail">
					<?php
					the_content();
					endif; ?>
				</div>
			</section>
	</main>
	<?php get_footer(); ?>
