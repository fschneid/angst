

                <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">
                    
                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large', false ); ?>    
                 
                <div class="textContainer">   
                    
                <div class="post-header-image" style="background-image:url(<?php echo $url[0]; ?>); background-position:<?php the_cfc_field('quote', 'hintergrundbildpos'); ?>% center"></div>     

                <header class="post-header">
                    
                <div class="headerText">  
                <h3>Protokolle der Angst</h3>        
                <h1 class="post-title"><?php the_title(); ?></h1>
                <span class="excerpt"><?php the_excerpt(); ?></span>    
                <span class="author">von <?php the_cfc_field('autoren', 'autor'); ?></span>    
                </div>     
                   
                </header>
                  
                <section class="post-content"> 

                <?php the_content();?>
                    
                <span class="credit">Bilder: <?php the_cfc_field('credit', 'foto-credit'); ?></span>       
                    
                </section> <?php // end article section ?>
                    
                  <div class="shareBtns">
                <a class="twitter" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" title="Twitter"></a>
                <a class="fb" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_blank" title="Facebook"></a>
                <a class="whatsapp" href="whatsapp://send?text=<?php the_permalink();?>" target="_blank" data-action="share/whatsapp/share"></a>      
                    
                </div>     

                </article> <?php // end article ?>

                 
                </div>
