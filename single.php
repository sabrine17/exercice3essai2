

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme4w4
 */

 
get_header();
?>
	
	<main id="primary" class="site-main">
	<section class="carrousel">
			<div></div>
			
	</section>
	

	<div id="shopify-section-1592882854916" class="shopify-section"><div class="button-carousel-section  ">
  <div class="button-carousel-section__container" style="background-color: #ffffff">
   
 
 <!-- <button class="button-carousel-section__arrows button-carousel-section__arrows--left" data-scroller-arrow="" data-scroller-arrow-direction="previous" style="background-image: linear-gradient(to right, rgb(255, 255, 255), 80%, rgba(255, 255, 255, 0));" disabled="">
      <svg title="Left facing arrow" width="14px" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="18 1 7 12 18 23"></polyline>
      </svg>
    </button>-->


    <ul class="button-carousel-section__buttons-list">
	
      
	  <li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-3m5imagerie-3d-75h" class="button-primary" tabindex="0">IMAGERIE 3D</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-4mb-animation-3d-75h" class="button-primary" tabindex="0">ANIMATION 3D</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-3j3-creation-de-jeu-3d-75h" class="button-primary" tabindex="0">CREATION DE JEU 3D</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-6n2-projet-de-fin-detudes-120h" class="button-primary" tabindex="0">PROJET DE FIN D'ÉTUDES</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-3c1-design-dinteractivite-75h" class="button-primary" tabindex="0">DESIGN INTERACTIF</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/582-6n3-stage-285h" class="button-primary" tabindex="0">STAGE</a>
		</li>
	  
		<li class="button-carousel-section__button-cta">
		  <a href="/4w4-3/description-du-cours-582-1m1-creation-video-2/" class="button-primary" tabindex="0">CRÉATION VIDÉO</a>
		</li>
  
	  
	  </ul>
   <!--<button class="button-carousel-section__arrows button-carousel-section__arrows--right" data-scroller-arrow="" data-scroller-arrow-direction="next" style="background-image: linear-gradient(to left, rgb(255, 255, 255), 80%, rgba(255, 255, 255, 0));">
      <svg title="Right facing arrow" width="14" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="7 1 18 12 7 23"></polyline>
      </svg>
    </button> -->
	
  </div>
</div>


	<section class="img-caroussel2">
			<div class="mySlides fade"></div>
			<div class="mySlides fade"></div>
			<div class="mySlides fade"></div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
	</section>
</div>
	


<script>
	var slideIndex = 1;
	showSlides(slideIndex);

// Next/previous controls
	function plusSlides(n) {
  	showSlides(slideIndex += n);
	}

// Thumbnail image controls
	function currentSlide(n) {
 	showSlides(slideIndex = n);
	}

	function showSlides(n) 
	{
  	var i;
 	 var slides = document.getElementsByClassName("mySlides");
 	 var dots = document.getElementsByClassName("dot");
 	 if (n > slides.length) {slideIndex = 1}
 	 if (n < 1) {slideIndex = slides.length}
 	 for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  	}
  	for (i = 0; i < dots.length; i++) 
	{
      dots[i].className = dots[i].className.replace(" active", "");
  	}
  	slides[slideIndex-1].style.display = "block";
  	dots[slideIndex-1].className += " active";
	}
</script>



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

	/*
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'theme4w4' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'theme4w4' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
*/

/*
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
*/
		endwhile; // End of the loop.
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();




