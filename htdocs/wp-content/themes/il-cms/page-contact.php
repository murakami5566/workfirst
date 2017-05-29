<?php
/**
 * @package WordPress
 * @subpackage il-cms
 **/
/*
Template Name: お問い合わせ
*/      
?>
<?php get_template_part('header');  ?>
<?php get_template_part('nav','global');  ?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); //固定ページの投稿でPタグの削除 ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>