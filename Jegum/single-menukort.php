<?php get_header(); ?>
<div class="front-section-menukort">
  <?php while(have_posts()) : the_post() ?>

  <h1 class="front-header"><?php the_title()?></h1>
  <p><?php the_content()?></p>

  <?php endwhile; ?>
</div>
<div class="containblack first-mode">
  <h2 id="orange">Velkommen til Jegum Café og købmand</h2>
    <div class="informations h1">
      
      <div class="info">
        <img src="<?php echo get_template_directory_uri() ?>/images/jegumfacade.jpg" width="auto" height="auto">
        <p><?php the_field("container1")?></p>
      </div>
    </div>
</div>

<?php get_footer(); ?>