<?php get_header(); ?>

<div class="page-container">

	<div class="sidebar-wrap sidebar--left">
		<div class="sidebar__text-wrap">
			<div class="sidebar__text sidebar__text--with-span">
				<span class="sidebar__text-line"></span>
				<span>SCROLL</span>
			</div>
			<div class="sidebar__text sidebar__text--last">TO NAVIGATE</div>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content__tab-wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="main-content__tab-box">
					<div class="main-content__tab-name">
						<?php
							$title = get_field("tab_title");
							$words = explode(" ", $title);
							foreach ($words as $word) {	?>
								<div>
									<?=$word?>
								</div>
						<?php };?>
					</div>
					<div class="main-content__tab-counter">
						<?= "0" . get_field("tab_number");?>
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div>

		<div class="main-content__horizontal-scroll-wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="main-content__post-wrap">
				<div class="main-content__rotate">
					<div class="main-content__panel main-content__panel--wide">
						<div class="main-content__panel-meta">
							<div class="greeting-wrap">
								<div class="greeting-progress">
									<span>01</span>
									<span class="greeting-progress-line"></span>
									<span>02</span>
								</div>
								<div class="greeting">
									<?= get_field("greeting");?>
								</div>
							</div>
							<div class="title"><?= the_title(); ?></div>
							<div class="subtitle"><?= get_field("subtitle");?> </div>

							<div class="cta-wrap">
								<div class="cta-arrow">
									<?= file_get_contents(get_stylesheet_directory_uri() . '/assets/right-arrow.svg'); ?>
								</div>
								<div class="cta-text">
									<?= (get_field("cta")['cta_label']); ?>
								</div>
							</div>
						</div>

					</div>
					<div class="main-content__panel">
						<h2><?= get_field("featured_text");?> </h2>
					</div>
					<div class="main-content__panel">
						3
					</div>
				</div>
			</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div>
	</div>

	<div class="sidebar-wrap sidebar--right">
		<div class="sidebar__heading">
			<div class="sidebar__text">
				WELCOME TO MCG
			</div>
		</div>

		<div class="sidebar__social-wrap">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'sidebar-social-menu',
				'container_class' => 'sidebar__social' ) );
			?>
		</div>
	</div>

</div>
<?php get_footer(); ?>
