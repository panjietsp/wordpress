<?php get_header(); ?>
  <div class="row">
      <div class="col-md-4">
	 
<?php if(have_posts()):?>
<?php while(have_posts()): the_post();?>
	<h2><?php the_title('电影名称:') ?></h2>
	<p><?php the_field('rating') ?></p>
	<p><?php the_field('status') ?></p>	
	<img src=<?php the_field('picture') ?> height='250' width='200' />
<?php endwhile;?>
<?php endif;?>
	  </div>    
   </div>
<?php get_sidebar(); ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
