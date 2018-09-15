<?php get_header(); ?>
	<main>
		<section class="l-home__top">
			<div class="home__top">
				<h2 class="home__top-title">
					<span>Message for you.</span>
					プログラミングが<br>キミを主人公にする
				</h2>

				<div class="home__top-detail">
					<p>
						今の学びに退屈さを感じているキミへ。
					</p>
					<p>
						キミの知的好奇心を満たし、<br>
						将来を明るく照らす鍵は“プログラミング”
					</p>
					<p>
						プログラミングの技術を身につければ、<br>
						これまでに出会ったことのない<br>
						ワクワクやドキドキと出会えるかもしれない。<br>
						プログラミングの力で世の中の不安を<br>
						希望へと変えられるかもしれない。
					</p>
					<p>
						さぁ、STUDY PLACEのトビラを開いて、<br>
						主人公になるためのカギを探しに行こう。
					</p>
				</div>

				<nav class="button__next">
					<a href="">私たちが目指すもの</a>
				</nav>
			</div>
		</section>

		<section class="l-home__notice">
			<div class="home__notice">
				<section class="home__notice-sentence">
					<h2 class="home__notice-title">
						<span>To notice.</span>
						創れるのはキミだけ
					</h2>

					<div class="home__notice-detail">
						<p>
							キミが進むためのレールも、<br>
							活躍するための居場所も
						</p>
						<p>
							キミが創造する未来の設計図は<br>
							自分自身でしか知り得ない
						</p>
						<p>
							その図面を広げられる場所＝placeを<br>
							君の手で見つけ出してほしい
						</p>
					</div>

					<nav class="button__next">
						<a href="<?php echo esc_url( home_url( '/category/spmedia/' ) ) ?>">SPMEDIA.me</a>
					</nav>
				</section>

				<section class="home__notice-image-collection-first">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo01.jpg" alt="">
					</figure>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo02.jpg" alt="">
					</figure>
				</section>

				<section class="home__notice-image-collection-second">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo03.jpg" alt="">
					</figure>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo04.jpg" alt="">
					</figure>
				</section>
			</div>
		</section>

		<section class="l-home__support">
			<div class="home__support">
				<h2 class="home__support-title">
					<span>I`ll support you.</span>
					自分にとっての“本物”を追い求めるキミへ
				</h2>
				<div class="home__support-detail">
					<p>
						「周りがやっているから」「あの人に勧められたから」<br>
						そんなふうに人に流されず、<br>
						自分が本当にやりたいことを始めたい
					</p>
					<p>
						キミが考える一番ベストな状態で<br>
						やりたいことをスタートできる場所がここにある
					</p>
				</div>

				<nav class="button__next">
					<a href="<?php echo esc_url( home_url( '/service/' ) ) ?>">サービスを知る</a>
				</nav>
			</div>
		</section>

		<section class="l-home__concept">
			<div class="home__concept">
				<h2 class="home__concept-title">
					<span>Concept</span>
					COMPANY SPIRITS
				</h2>
				<div class="home__concept-detail">
					<h3 class="">MISSION - 情熱を傾け、目指すもの</h3>
					<p>“いつ使うかわからない技術”よりも<br class="home__concept-detail-br">“今すぐ使える技術”を</p>
				</div>
				<div class="home__concept-detail">
					<h3 class="">VISION - 私たちの行動方針</h3>
					<p>
						未来を生きる若者たちのために<br class="home__concept-detail-br">10年先の技術・能力を予見する<br>
						究極のIT教育ベンチャーであり続ける
					</p>
				</div>

				<nav class="button__next">
					<a href="<?php echo esc_url( home_url( '/concept/' ) ) ?>">理念について</a>
				</nav>
			</div>
		</section>

		<section class="l-home__news">
			<div class="home__news-title-wrap">
				<h2 class="home__news-title">
					<span>Event & Announcement</span>
					NEWS
				</h2>
			</div>
			<div class="home__news-detail-wrap">
				<ul class="home__news-list">
					<?php
					$args = array(
						'posts_per_page' => 4,
						'category'       => -10
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
					<li class="home__news-list-detail">
						<article>
							<div class="home__news-post-time">
								<time datetime="<?php the_time( 'Y-m-d' ); ?>">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</time>
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a></h3>
							<?php echo get_the_category_list(); ?>
						</article>
					</li>
					<?php
					endforeach;
					wp_reset_postdata();
					?>
				</ul>
			</div>
			<div class="home__news-article_wrap">
				<p><a href="<?php echo esc_url( home_url( '/category/news/' ) ) ?>">これまでのニュース記事</a></p>
			</div>
		</section>

		<section class="l-home__media">
			<div class="home__media">
				<h2 class="home__media-title">
					<span>Everyone knows</span>
					メディア掲載実績
				</h2>
				<ul id="media_slider" class="home__media-list">
					<?php
					$args = array(
						'posts_per_page' => 10,
						'category' => 10
					);
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
					<li class="home__media-list-detail">
						<figure>
							<a href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail(); ?>
							</a>
							<figcaption>
								<a href="<?php the_permalink(); ?>"><?php esc_html( the_title() ); ?></a>
							</figcaption>
						</figure>
					</li>
					<?php
					endforeach;
					wp_reset_postdata();
					?>
				</ul>
			</div>
		</section>
	</main>
<?php get_footer();