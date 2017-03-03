
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

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

                <header class="post-header">
                    
                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>    
                    
                <div class="post-header-image" style="background-image:url(<?php echo $url[0]; ?>)"></div> 
                    
                <div class="headerText">  

                <h1 class="post-title"><?php the_title(); ?></h1>
                <span class="excerpt"><?php the_excerpt(); ?></span>    
                <span class="author">von <?php the_cfc_field('autoren', 'autor'); ?></span>    
               
                    
                

               </div>     
                    
                </header>
                  
                <section class="post-content"> 
                    
                    
                 

                 
                  <?php
                    the_content();
                  ?>
                </section> <?php // end article section ?>

              </article> <?php // end article ?>
