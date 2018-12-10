<?php get_header(); ?>
  <div class="row">
      <div class="col-md-4">
<?php if(have_posts()):?>
<?php while(have_posts()): the_post();?>
	<div class="card" style="width:250px">
    <img class="card-img-top" src=<?php the_field('picture') ?>  height='250'>
    <div class="card-body" style="padding:0;">
      <p class="card-text"><span > <?php the_title() ?></span><span style="float:right;"><?php the_field('rating') ?></span></p>
      <a href="#" class="btn btn-danger btn-block">特惠购票</a>
    </div>
  </div>
<?php endwhile;?>
<?php endif;?>
	  </div>    
   </div>
<?php get_sidebar(); ?>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>

