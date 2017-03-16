
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>


            <?php $classes = get_body_class(); ?>

            <?php if (in_array('single-wpt_test', $classes) || in_category('quiz')) { ?>

             <?php the_content(); ?>
            
            <?php } else { ?>  
            

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

                <header class="post-header">
                    
                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', false ); ?>    
                    
                <div class="post-header-image" style="background-image:url(<?php echo $url[0]; ?>)"></div>     
                    
                <div class="headerText">  

                <h1 class="post-title"><?php the_title(); ?></h1>   
                <span class="author">von <?php the_cfc_field('autoren', 'autor'); ?></span>    
               
  
               </div>     
                    
                </header>
                  
                <section class="post-content"> 
                    
                    
                 
                 <span class="excerpt"><?php the_excerpt(); ?></span>        
                 
                  <?php
                    the_content();
                  ?>
                    
                <span class="credit">Bilder: <?php the_cfc_field('credit', 'foto-credit'); ?></span>     
                    
                </section> <?php // end article section ?>
                  
                 <div class="shareBtns">
                <a class="twitter" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" title="Twitter"></a>
                <a class="fb" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Facebook"></a>
                <a class="whatsapp" href="whatsapp://send?text=<?php the_permalink();?>" target="_blank" data-action="share/whatsapp/share"></a>    
                </div>  

              </article> <?php // end article ?>

               

                <?php } ?>  
          