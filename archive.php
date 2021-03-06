<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ): ?>
		<section class="l-contents__archive">
			<div class="contents__archive">
				<?php
					the_archive_title( '<h1 class="contents__archive-title"><span>Newspaper column &amp; Report</span>', '</h1>' );
					the_archive_description( '<div class="contents__archive-description">', '</div>' );
					?>
			</div>
		</section>

		<section class="l-contents__archive-list">
			<div class="contents__archive-list">
				<ul>
					<?php while( have_posts() ) : the_post(); ?>
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
	<?php endif; ?>
	</main>
<?php get_footer();