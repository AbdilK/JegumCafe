<?php get_header(); ?>
<div class="front-section-aktiviteter">
  <?php while(have_posts()) : the_post() ?>

  <h1 class="front-header"><?php the_title()?></h1>

  <?php endwhile; ?>
</div>

<div class="containblack first-mode">
  <h2 id="orange"><?php the_field("h1_aktiviteter")?></h2>
    <div class="informations h1">
      
      <div  class="infoAktivitet">
        <p><?php the_content()?></p>
      </div>
    </div>
</div>

<div class="containimage7 first-mode">
<h1><?php the_field("aktivitet1")?></h1>
    <div  class="infoAktivitet">
   
    </div>
</div>

<div class="containimage5 first-mode">
<h1><?php the_field("aktivitet2")?></h1>
    <div  class="infoAktivitet">
  
    </div>
</div>

<div class="containimage3 first-mode">
    <h1><?php the_field("aktivitet3")?></h1>
    <div  class="infoAktivitet">
    <h2 class="aPrice"><?php the_field("pris")?><br> 20,- </h2>
        <br>
        <a href="#" class="bookButton"><?php the_field("btn")?></a>
    </div>
</div>
<div class="containimage4 first-mode">
<h1><?php the_field("aktivitet4")?></h1>
    <div  class="infoAktivitet">
    <h2 class="aPrice"><?php the_field("pris")?><br> 20,- </h2>
        <br>
        <a href="#" class="bookButton"><?php the_field("btn")?></a>
    </div>
</div>

<div class="containimage6 first-mode">
<h1><?php the_field("aktivitet5")?></h1>
    <div  class="infoAktivitet">
    <h2 class="aPrice"><?php the_field("pris")?> <br>VOKSEN 35,- <br> BØRN 25,-</h2>
        <a href="#" class="bookButton"><?php the_field("btn")?></a>
    </div>
</div>




<?php get_footer(); ?>