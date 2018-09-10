
<?php  get_header(); ?>


<section id="noticias" class="size-center content medidas">
  
  <h2>
      <?php     
	    foreach((get_the_category()) as $category)  
	     echo $category->cat_name;  		  
	  ?>
  </h2>
  
   <script>
    $(document).ready(function() 
    {
	 <?php
	 
	   if($category->cat_name=="noticias")
	   {
	 ?>
      $('.nav-en').addClass('ocultar');
      $('.nav-es').addClass('mostrar');   
	 <?php
	   }
	   else if($category->cat_name=="news")
	   {
	 ?> 
      $('.nav-es').addClass('ocultar');
      $('.nav-en').addClass('mostrar');   
	 <?php
	   }
	 ?>

    })
 </script>

  
   <div id="noticias-informacion">
     <div id="primary" class="site-content">
	   <div id="content" role="main">

         <?php 
              while ( have_posts() ) : the_post(); 
         ?>
 
         <h3><?php the_title();?></h3>
         <?php if($ban) the_post_thumbnail(); else  the_post_thumbnail('img-single');  ?>
        
         <div class="entrycontent"><?php the_content('[...]'); ?></div> 

		 <?php //comments_template( '', true ); ?>

		 <?php endwhile; //twentytwelve_content_nav( 'nav-below' );// end of the loop. ?>

         <?php // wp_reset_query(); ?>

	    </div><!-- #content -->
 	 </div><!-- #primary -->
    </div>
    
    <div id="secondary" class="widget-area" role="complementary">

 	 <aside id="recent-posts-2" class="widget widget_recent_entries">		
       <h3 class="widget-title">MÁS NOTICIAS</h3>		
       <ul>
         <?php
          query_posts("category_name=$category->cat_name&posts_per_page=6");	
          while (have_posts()) : the_post();		 
        ?>    
         <li>
          <a href="<?php the_permalink(); ?>"><?php the_title();?></a>	 
    	 </li>	
        <?php  
	     endwhile; 		
	    ?>
       <?php wp_reset_query(); ?>      
	   </ul>
	</aside>    
 </div>

</section>

  

<?php get_footer(); ?>