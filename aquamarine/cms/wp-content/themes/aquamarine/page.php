<?php get_header(); ?>

  <section id="titulo-categoria" class="size100-p">
   
   <article class="size-center">
     <h2 id="font34"><?php 
			 the_title();		  
		  ?>          
     </h2>
   </article>
  
  </section>
    
  <section id="paginas" class="size100-p">
    <article class="size-center"> 
   
    <?php get_sidebar(); ?>
    
    <div id="paginas-informacion">
	   <div id="primary" class="site-content">
	 	<div id="content" role="main">
        
         <?php while ( have_posts() ) : the_post(); ?>
        		
		  <?php get_template_part( 'content', 'page' ); ?>
		  <?php comments_template( '', true ); ?>
		
         <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	   </div><!-- #primary -->
     </section>

    </article>
  </section>


<?php get_footer(); ?>