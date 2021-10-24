<?php get_header(); ?>
<main>
    <div class="loja">
        <?php woocommerce_content(); ?>
    </div>
        <?php if (function_exists('minha_sidebar')): ?>

        <?php dynamic_sidebar('minha-side-bar'); ?> 

        <?php endif; ?>
</main>
<?php get_footer(); ?>