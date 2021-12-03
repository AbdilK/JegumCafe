<?php get_header(); ?>
<div class="front-section-cafe">
  <?php while(have_posts()) : the_post() ?>

  <h1 class="front-header"><?php the_title()?></h1>
  

  <?php endwhile; ?>
</div>
<section>
<div class="containblack first-mode">
<h2 id="orange"><?php the_field("jegum_cafe")?></h2>
<img src="<?php the_field ("mad3")?>" width="auto" height="500px">
 
<div class="informations h1">
      
      <div  class="infoCafe">
        
        <p><?php the_content()?></p>
      </div>
    </div>
</div>
</section>

<div class="containimage2 first-mode">
<h2 id="orange"><?php the_field("bestil_bord")?></h2>
<h2 id="orangenumber"><?php the_field("telefon_nummer")?></h2>
</div>



<div class="containblack first-mode">
  <h2 id="orange"><?php the_field("menukort")?></h2>
    <div class="informations h1">
      
      <div  class="info">
      <img src="<?php the_field ("menukortimg")?>"  width="auto" height="auto">
       
      </div>
    </div>
</div>

<div class="containimage8 first-mode">

</div>

<div class="containblack first-mode">
<h2 id="orange"><?php the_field("drikkekort")?></h2>
    <div class="informations h1">

      <div  class="info">
      <img src="<?php the_field ("drinkskort")?>" width="auto" height="auto">
        
      </div>
    </div>
</div>

<?php get_footer(); ?>