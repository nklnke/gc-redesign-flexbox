<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_title(); ?>

 <?php woocommerce_content(); ?>

<?php endwhile; endif; ?>
