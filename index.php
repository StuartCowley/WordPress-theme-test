<?php get_header(); ?>

<div class="page-container">

	<div class="sidebar-wrap sidebar--left">
		<div class="sidebar__text-wrap">
			<div class="sidebar__text">
				<span class="sidebar__text-line"></span>
				<span>SCROLL</span></div>
			<div>TO NAVIGATE</div>
		</div>
	</div>

	<div class="main-content">
		<div class="main-content__header-strip">
			<div class="main-content__header-strip-logo">logo</div>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-content__post-wrap">
			<h1><?= the_title(); ?></h1>
			<h2><?= get_field("greeting");?> </h2>
			<p><?= the_content(__('(more...)')); ?></p>
		</div>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
	</div>

	<div class="sidebar-wrap sidebar--right">
		<div class="sidebar__heading">
			<span class="sidebar__heading-span">
				WELCOME TO MCG
			</span>
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
