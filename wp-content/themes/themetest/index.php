<?php get_header(); ?>

<body>
	<div class="wrap">
		<div class="navbar">
			<h1><?php bloginfo('name') ?></h1>

			<?php get_sidebar('home'); ?>
		</div>

		<?php 
			if(have_posts()):
				while(have_posts()): the_post();
					get_template_part('template-parts/post/content');
				endwhile;
			endif;	
		?>
	</div>	
</body>

<?php wp_footer(); ?>