<?php get_header(); ?>

<div class="page-container">

	<div class="header-wrap">
		<div class="header-centraliser">
			<div class="header__element">
				<?= file_get_contents(get_stylesheet_directory_uri() . '/assets/menu-bars.svg'); ?>
			</div>
			<div class="header__element header__element--center">
				<?= file_get_contents(get_stylesheet_directory_uri() . '/assets/MCG-Logo.svg'); ?>
			</div>
			<div class="header__element">En</div>
		</div>
	</div>

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

		<div id="scrollwrap" class="main-content__horizontal-scroll-wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="<?= get_field('tab_title')?>" class="main-content__post-wrap">
				<div class="main-content__rotate">
					<div class="main-content__background-image-wrap">
						<?php $image=get_field("background_image");?>
						<img class="main-content__background-image" src="<?= $image['url'] ?>" />
					</div>
					<div class="main-content__panel main-content__panel--front main-content__panel--wide">
						<div id="<?= get_field('tab_title')?>__meta" class="main-content__panel-meta">
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


							<a class="cta-wrap" href="<?= get_field("cta")['cta_url'];?>">
								<div class="cta-arrow">
									<?= file_get_contents(get_stylesheet_directory_uri() . '/assets/right-arrow.svg'); ?>
								</div>
								<div class="cta-text">
									<?= (get_field("cta")['cta_label']); ?>
								</div>
							</a>
						</div>

					</div>
					<?php $title = get_field("featured_text");
						$words = explode(" ", $title);?>
					<div class="main-content__panel">
						<div id="<?= get_field('tab_title')?>__featured--bottom" class="main-content__featured-text main-content__featured-text--bottom">
							<?= $words[0];?>
						</div>
					</div>
					<div class="main-content__panel">
						<div id="<?= get_field('tab_title')?>__featured--top" class="main-content__featured-text main-content__featured-text--top">
							<?= $words[1];?>
						</div>

					</div>
				</div>
			</div>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		</div>

		<div class="main-content__tab-wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="main-content__tab-box-wrap">
					<?php $new_location = get_field("tab_title"); ?>
					<div id="<?= get_field('tab_title')?>__tab" onclick="jump('<?= $new_location ?>')" class="main-content__tab-box">
						<div class="main-content__tab-name">
							<?php
								$title = get_field("tab_title");
								$words = explode(" ", $title);
								foreach ($words as $word) {	?>
									<div>
										<div><?=$word?></div>
									</div>
							<?php };?>
						</div>
						<div class="main-content__tab-counter">
							<?= "0" . get_field("tab_number");?>
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
