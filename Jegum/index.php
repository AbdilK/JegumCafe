<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php get_header(); ?>
<div class="main-section">
<?php while(have_posts()) : the_post() ?>
  
<div class="info-sektion">
    <div>
      <h1><?php the_title()?></h1>
    </div>

    <div class="madBillede" height="auto" width="450px">
    <img src="<?php the_field ("food_picture")?>" alt="image">

</div>

    
</div> 
<?php endwhile; ?>
</div>

<?php get_footer(); ?>