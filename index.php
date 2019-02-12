<?php get_header(); ?>
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="image"><img src="<?php bloginfo('template_url'); ?>/assets/images/Cleanaway logo@2x.png" width="200" /></div>
					<div class="heading"><h1>Flexible Visitor types</h1></div>
					<div class="desription">
						<p>"The experiene with Sine has been fantastic, they were able to provide us with a product that is an upgrade from our previous product. The service is amazing and always easy to access."</p>
						<span>Jake M. | Cleanway Admin & Customer Service</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<div class="col-md-8">
						<?php get_template_part( 'content', get_post_format() ); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
