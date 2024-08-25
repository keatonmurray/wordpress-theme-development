<?php get_header(); ?>

<?php get_template_part('parts/nav'); ?>

<main>
    <?php get_template_part('parts/homepage'); ?> 
    <?php get_template_part('parts/categories'); ?>
    <?php get_template_part('parts/featured'); ?>
    <?php get_template_part('parts/blog'); ?>
</main>

<?php get_footer(); ?>