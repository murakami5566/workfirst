<?php get_template_part('header');  ?>
<?php get_template_part('nav','global');  ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
<?php get_footer(); ?>