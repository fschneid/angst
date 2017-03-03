<?php get_header(); ?>

			<div id="content">
                
            <section class="intro">
            <div class="preloader" style="background-image:url(wp-content/uploads/2017/02/intro1.jpg)">
            <img class="hidden" src="wp-content/uploads/2017/02/intro2.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro3.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro4.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro5.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro6.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro7.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro8.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/02/intro9.jpg" />     
            <img class="hidden" src="wp-content/uploads/2017/02/intro10.jpg" />     
            </div>    
            <div class="content"> 
            <div class="innerContent">    
                
            <div class="text">   
                <h3>Was</h3>    
                <div class="typeWrapper"><span data-text="A">A</span><span data-text="N">N</span><span data-text="G">G</span><span data-text="S">S</span><span data-text="T">T</span></div>
                <h3>Macht</h3> 
            </div>
            </div>
            </div>     
                
            </section>
                
                    
                            <section class="protokolle full padded">
                           <div class="slider"> 
                            
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                            
                            <?php if (in_category("protokoll")){?>
                                
                            <div class="carousel-cell">
                            <?php the_post_thumbnail( $size = 'teaser' ); ?>    
                            <div class="text">  
                            <h2><?php the_cfc_field('quote', 'zitat'); ?></h2>
                            <a class="moreBtn white" href="<?php the_permalink() ?>">Zum Protokoll</a>   
                            </div>     
                            </div>
                                
                            <?php if( $wp_query->current_post ==3 ){?> </div> </section><section class="padded"><div class="content"><div class="innerContent"><?php } ?> 
                                
                
                            <?php } else { ?>
                            
                
                            <?php if( $wp_query->current_post == 8){?></div></div></section><section class="padded full facts"><div class="content"><div class="innerContent"><div class="doubleCol"><div class="innerContent"><?php } ?>
                
                             <?php if( $wp_query->current_post == 11){?></div></div></section><section class="padded x"><div class="content"><div class="innerContent"><?php } ?>
                            

							
                                
                                
                            <?php if (in_category('video')) { ?>
                
                               <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
                               <?php $id = get_post_meta($post->ID, "videoID", true); ?>
                                
                
                                <article id="post-<?php the_ID(); ?>" <?php post_class();?> data-id="<?php $id ?>" style="background-image:url(<?php echo $url[0]; ?>)">
                                <div class="text">
                                <span>Video</span>
                                <h2><?php the_title(); ?></h2>
                                <span class="playBtn"></span>    
                                </div>
                            <?php } else {?>    
                                
                                <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
                                 <?php the_post_thumbnail( $size = 'teaser' ); ?>  
								
								<header>
                                    <div class="text">
                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_excerpt(); ?></p>
                                    
                                    <a class="moreBtn" href="<?php the_permalink() ?>">Mehr Lesen</a>
                                    </div>
                                </header>
                                    
                             <?php if( $wp_query->current_post == 9){?></div></div><?php } ?>        
                                    
                            <?php if( $wp_query->current_post == 13 ){?></div></div></section><?php } ?>         
                                
                            <?php } ?>
							</article>
                         
                            <?php } ?>

							<?php endwhile; endif; ?>

						
                    
				

			</div>


<?php get_footer(); ?>
