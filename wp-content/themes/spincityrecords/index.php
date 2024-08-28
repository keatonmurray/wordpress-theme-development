<?php get_header(); ?>
<?php get_template_part('parts/nav');?>

<main>
    <?php 
    
    if(is_home()) {
        get_template_part('templates/homepage');
        get_template_part('templates/catalogues');
        get_template_part('partials/quote');
        get_template_part('templates/products');
        get_template_part('templates/blogs');
        get_template_part('templates/newsletter');
    }
    ?>
</main>

<?php get_footer(); ?>