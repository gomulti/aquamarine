<?php get_header(); ?>

  <section id="titulo-categoria" class="size100-p">
   <article class="size-center">
     <h2><?php 
	       foreach((get_the_category()) as $category)  
		     echo $category->cat_name;  		  
		  ?>
     </h2>
   </article>  
  </section>
  
  <section id="categorias" class="size100-p">
  
   <article class="size-center">
  
    <?php get_sidebar(); ?>
    
    <div id="categorias-informacion">
    
	  <section id="primary" class="site-content">

	   <div id="content" role="main">

		<?php if ( have_posts() ) : ?>
        
         <ul>
		  <?php
			while ( have_posts() ) : the_post();
           ?>
              <li>               
                 <a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail('img-categoria'); ?> 
                  <div> 
                    <h3 class="efecto"><?php the_title();?></h3>
                    <p class="entry_excerpt"><?php the_excerpt('[...]'); ?></p> 
                    <span class="leer-mas efecto">Leer m&aacute;s</span>
                  </div>
                 </a>
              </li>  
             <?php
			endwhile;

			//twentytwelve_content_nav( 'nav-below' );                          
			?>             
         </ul>
                        
      </div>
      
	  <?php //if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

		<?php //else : ?>

			<?php //get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- #content -->

	 </section><!-- #primary -->

    </div>

   </article>
  
  </section>
  

<?php get_footer(); ?>