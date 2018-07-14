<?php get_header(); ?>
	<main>
		<section class="l-contents__top">
			<div class="contents__top">
				<h2 class="contents__top-title">
					<span>Message for you.</span>
					プログラミングが<br>キミを主人公にする
				</h2>

				<div class="contents__top-detail">
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

		<section class="l-contents__notice">
			<div class="contents__notice">
				<section class="contents__notice-sentence">
					<h2 class="contents__notice-title">
						<span>To notice.</span>
						創れるのはキミだけ
					</h2>

					<div class="contents__notice-detail">
						<p>
							キミが進むためのレールも、<br>
							活躍するための居場所も
						</p>
						<p>
							キミが創造する未来の設計図は<br>
							自分自身でしか知り得ない
						</p>
						</p>
						<p>
							その図面を広げられる場所＝placeを<br>
							君の手で見つけ出してほしい
						</p>
					</div>

					<nav class="button__next">
						<a href="">SPMEDIA.me</a>
					</nav>
				</section>

				<section class="contents__notice-image-collection-first">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo01.jpg" alt="">
					</figure>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo02.jpg" alt="">
					</figure>
				</section>

				<section class="contents__notice-image-collection-second">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo03.jpg" alt="">
					</figure>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/photo04.jpg" alt="">
					</figure>
				</section>
			</div>
		</section>

		<section class="l-contents__support">
			<div class="contents__support">
				<h2 class="contents__support-title">
					<span>I`ll support you.</span>
					自分にとっての“本物”を追い求めるキミへ
				</h2>
				<div class="contents__support-detail">
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
					<a href="">サービスを知る</a>
				</nav>
			</div>
		</section>

		<section class="l-contents__concept">
			<div class="contents__concept">
				<h2 class="contents__concept-title">
					<span>Concept</span>
					COMPANY SPIRITS
				</h2>
				<div class="contents__concept-detail">
					<h3 class="">MISSION - 情熱を傾け、目指すもの</h3>
					<p>“いつ使うかわからない技術”よりも<br class="contents__concept-detail-br">“今すぐ使える技術”を</p>
				</div>
				<div class="contents__concept-detail">
					<h3 class="">VISION - 私たちの行動方針</h3>
					<p>
						未来を生きる若者たちのために<br class="contents__concept-detail-br">10年先の技術・能力を予見する<br>
						究極のIT教育ベンチャーであり続ける
					</p>
				</div>

				<nav class="button__next">
					<a href="">理念について</a>
				</nav>
			</div>
		</section>

		<section class="l-contents__news">
			<div class="contents__news-title-wrap">
				<h2 class="contents__news-title">
					<span>Event & Announcement</span>
					NEWS
				</h2>
			</div>
			<div class="contents__news-detail-wrap">
				<ul class="contents__news-list">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<li class="contents__news-list-detail">
								<article>
									<div class="contents__news-post-time">
										<time datetime="<?php the_time( 'Y-m-d' ); ?>">
											<?php the_time( get_option( 'date_format' ) ); ?>
										</time>
									</div>
									<h3><a href=""><?php the_title(); ?></a></h3>
									<div class="contents__news-category">
										<?php
											$cat   = get_the_category();
											$count = count($cat);
											$text  = '';
											for ( $i = 0; $i < $count; $i++) {
												if ( $i > 0 ) {
													$text .= ' ';
												}
												$text .= '<span>' . $cat[$i]->cat_name . '</span>';
											}
											echo $text;
										?>
									</div>
								</article>
							</li>
						<?php endwhile; ?>
					<?php else: ?>
						<li>現在お知らせはありません。</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="contents__news-article_wrap">
				<p> これまでのニュース記事</p>
			</div>
		</section>

		<section class="l-contents__media">
			<div class="contents__media">
				<h2 class="contents__media-title">
					<span>Everyone knows</span>
					メディア掲載実績
				</h2>
				<ul id="media_slider" class="contents__media-list">
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_1.png" alt="">
							<figcaption>
								宮崎日日新聞００月号<br>○○コーナー掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_2.png" alt="">
							<figcaption>
								IT情報専門誌「○○○○」<br>「○○の人」掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_3.png" alt="">
							<figcaption>
								日経ビジネス「○○○○」<br>「○○キーマン」掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_4.png" alt="">
							<figcaption>
								教育広報○○○○００月号<br>地域創生事例集掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_5.png" alt="">
							<figcaption>
								朝日新聞WEB「○○○○」<br>「教育の今」特集掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_1.png" alt="">
							<figcaption>
								宮崎日日新聞００月号<br>○○コーナー掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_2.png" alt="">
							<figcaption>
								IT情報専門誌「○○○○」<br>「○○の人」掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_3.png" alt="">
							<figcaption>
								日経ビジネス「○○○○」<br>「○○キーマン」掲載
							</figcaption>
						</figure>
					</li>
					<li class="contents__media-list-detail">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/img/media_4.png" alt="">
							<figcaption>
								教育広報○○○○００月号<br>地域創生事例集掲載
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>