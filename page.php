<?php get_header(); ?>
	<main>
		<?php if ( have_posts() ) :
			the_post();
			the_content();
		endif; ?>
	</main>
	<script>
		$(function(){
			var pageUrl = location.href;
			if( pageUrl.indexOf("privacy-policy") !== -1 || pageUrl.indexOf("contact") !== -1) {
				$(".header__wrap .global_nav").addClass("black");
				$("#header_logo").attr("src", "<?php echo get_template_directory_uri(); ?>/img/logo2.png");
			}
		});
	</script>
<?php get_footer();