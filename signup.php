<?php /* Template Name: ورود */ ?>
<?php if (is_user_logged_in()) :wp_redirect(home_url()) ?>
<?php else: ?>
<?php get_header(); ?>
<?php get_template_part('partials/nav/nav_menu','nav_menu'); ?>
<?php get_template_part('partials/layout/start-layout','start-layout'); ?>
<?php get_template_part('partials/registration/signup/main_content','main_content'); ?>
<?php get_template_part('partials/layout/end-layout','end-layout'); ?>
<?php get_footer(); ?>
<?php endif; ?>

