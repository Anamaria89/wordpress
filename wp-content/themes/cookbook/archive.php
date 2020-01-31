<?php get_header();?>

<div class="container">

    
      
       <h2><?php single_cat_title(); ?> </h2>
 <?php if (have_posts()) : while(have_posts()) : the_post();?>
         <?php the_title();?>
       <?php the_excerpt();?>
       <a href="<?php the_permalink();?>">Read more</a>
<?php endwhile; endif;?>
  
</div>


<?php get_footer();?>