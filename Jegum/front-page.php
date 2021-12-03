<?php get_header(); ?>

<div class="front-section">
  <?php while(have_posts()) : the_post() ?>

  <h1 class="bg-text">
    <?php the_title()?>
  </h1>

  <?php endwhile; ?>
</div>

<div class="containblack first-mode">
  <h2 id="orange">VELKOMMEN TIL JEGUM CAFÉ OG KØBMAND</h2>
    <div class="informations h1">
      
      <div  class="info">
        <p id="white"><?php the_content("")?></p>
      </div>
    </div>
</div>

<div class="containorange first-mode">
    <div class="informations h1">
      <div class="info">
        <img src="<?php the_field ("kaffeavisimg")?>" width="350px" height="350px">
        <p id="black"><?php the_field("velkomst")?></p>
      </div>
      <div class="info">
        <img src="<?php the_field ("ravarerimg")?>" width="350px" height="350px">
        <p id="black"><?php the_field("friske_ravarer")?></p>
      </div>
    </div>
</div>

<div class="containimage first-mode">
    
</div>
<div class="containblack first-mode">
    <div class="informations h1">
      <div  class="info">
      <img src="<?php the_field ("bageriimg")?>"  width="auto" height="300px">
        <p><?php the_field("bageri")?></p>
      </div>
      <div class="info">
      <img src="<?php the_field ("elitesmileyimg")?>"  width="auto" height="300px">
        <p><?php the_field("elite_smiley")?></p>
      </div>
      <div class="info">
      <img src="<?php the_field ("specialvinimg")?>"  width="auto" height="300px">
        <p><?php the_field("special_vin")?></p>
      </div>
    </div>
</div>


</div>
</section>
<section class="maps">
      <div class="googlemap">
        <div class="maps-titel">
        </div>
        <div>
            <iframe v-else class="map"
              src="https://maps.google.com/maps?q=Blomstervangen%201,%206840&t=k&z=13&ie=UTF8&iwloc=&output=embed"
              width="100%"
              height="350px"
              allowfullscreen=""
              loading="lazy">
              
            </iframe>
          </div>
      </div>
  </section>

<?php get_footer(); ?>



