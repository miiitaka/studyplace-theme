<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) : the_post(); ?>
			<section class="l-contents__contribution" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
				<div class="contents__contribution">
					<?php
					$html  = '';
					$html .= '<div class="contents__contribution-date">' . get_the_time( 'Y.m.d' ) . '</div>';
					$html .= '<h2 class="contents__contribution-title">' . esc_html( get_the_title() ) . '</h2>';
					$html .= '<div class="contents__contribution-link">';
					$html .= '<div class="contents__contribution-link-category">category' . get_the_category_list() . '</div>';
					$html .= '<div class="contents__contribution-link-author">author<span>' . esc_html( get_the_author() ) . '</span></div>';
					$html .= '</div>';
					echo $html;
					?>
				</div>
			</section>
			<section class="l-contents__contribution-detail">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'contents__contribution-detail' ); ?>>
					<?php the_content(); ?>
				</article>
				<div class="contents__contribution-sidebar">
					<?php get_sidebar(); ?>
				</div>
			</section>

			<?php
				$query_args = array(
					'post_status'         => 'publish',
					'no_found_rows'       => true,
					'posts_per_page'      => 4,
					'ignore_sticky_posts' => true,
					'orderby'             => 'rand'
				);

				$id       = get_the_ID();
				$terms    = get_the_terms( 0, 'category' );
				$term_ids = array();
				if ( $terms && !is_wp_error( $terms ) ) {
					foreach( $terms as $term ) {
						$term_ids[] = $term->term_id;
					}
					$query_args += array( 'category__in' => $term_ids, 'post__not_in' => array( $id ) );
				}

				$query = new WP_Query( $query_args );
				if ( $query->have_posts() ) :
			?>
			<section class="l-contents__archive-list">
				<div class="contents__archive-list">
					<h2 class="contents__archive-list-title"><span>Related article</span>関連記事</h2>
					<ul>
						<?php
							while ( $query->have_posts() ) :
							$query->the_post();
						?>
							<li class="contents__archive-list-detail">
								<article>
									<div class="contents__archive-list-text">
										<time datetime="<?php the_time( 'Y-m-d' ); ?>">
											<?php the_time( get_option( 'date_format' ) ); ?>
										</time>
										<h3><a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a></h3>
										<div class="contents__archive-list-detail-category">category<?php echo get_the_category_list(); ?></div>
										<div class="contents__archive-list-detail-author">author<span><?php echo get_the_author(); ?></span></div>
									</div>
									<figure>
										<a href="<?php the_permalink(); ?>">
											<?php echo get_the_post_thumbnail(); ?>
										</a>
									</figure>
								</article>
							</li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
			</section>
			<? endif; ?>
		<?php endif; ?>
	</main>
<?php get_footer();