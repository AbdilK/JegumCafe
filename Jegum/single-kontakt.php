<?php get_header(); ?>
<div class="front-section-kontakt">
  <?php while(have_posts()) : the_post() ?>

  <h1 class="front-header"><?php the_title()?></h1>
  <p><?php the_content()?></p>

  <?php endwhile; ?>
</div>

<div class="containblack first-mode">
    <div class="informations h1">
      <div class="info">
        
        <h2 id="orange"><?php the_field("abningstider")?></h2>
          <h3 id="openHours"><?php the_field("openinghours")?></h3>
          <h3 id="openHours"><?php the_field("bemaerk")?></h3>
          <h3 id="openHours"><?php the_field("folg_med")?></h3>
        
      </div>
    </div>
</div>

<div class="containorange first-mode">
    <div class="informations h1">
      <div  class="info">

      <a href="tel:+4575271919">
      <img src="<?php the_field ("telefonimg")?>" width="200px" height="auto">
      </a>
      <a href="tel:+4575271919"> 
        <p id="black"><?php the_field("telefon_nummer")?></p>
      </a>
      </div>
      <div class="info">
      <a href="mailto: cafejegum@gmail.com">
      <img src="<?php the_field ("mailimg")?>" width="200px" height="auto">
      </a>
      <a href="mailto: cafejegum@gmail.com">  
        <p id="black"><?php the_field("e-mail")?></p>
      </a>
      </div>
      <div class="info">
      <a href="https://www.google.com/maps/place/Jegum+Ferieland/@55.6672516,8.3168802,15z/data=!4m2!3m1!1s0x0:0x9122551ad73d997a?sa=X&ved=2ahUKEwjygaf4t8X0AhU_SfEDHUGTAqYQ_BJ6BAhgEAU" target="_blank">
      <img src="<?php the_field ("houseimg")?>" width="200px" height="auto">
      </a>
      <a href="https://www.google.com/maps/place/Jegum+Ferieland/@55.6672516,8.3168802,15z/data=!4m2!3m1!1s0x0:0x9122551ad73d997a?sa=X&ved=2ahUKEwjygaf4t8X0AhU_SfEDHUGTAqYQ_BJ6BAhgEAU" target="_blank">
        <p id="black"><?php the_field("adresse")?></p>
      </a>
      </div>
    </div>
</div>




<?php get_footer(); ?>