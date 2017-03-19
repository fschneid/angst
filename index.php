<?php get_header(); ?>

			<div id="content">
                
            <section class="intro">
            <div class="preloader" style="background-image:url(wp-content/uploads/2017/03/intro1-800x560.jpg)">
            <img class="hidden" src="wp-content/uploads/2017/03/intro2-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro3-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro4-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro5-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro6-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro7-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro8-800x560.jpg" /> 
            <img class="hidden" src="wp-content/uploads/2017/03/intro9-800x560.jpg" />     
            <img class="hidden" src="wp-content/uploads/2017/03/intro10-800x560.jpg" />     
            </div>    
            <div class="content"> 
            <div class="innerContent">    
                
            <div class="text">   
                <h3>Was</h3>    
                <div class="typeWrapper"><span data-text="A">A</span><span data-text="N">N</span><span data-text="G">G</span><span data-text="S">S</span><span data-text="T">T</span></div>
                <h3>Macht</h3> 
            </div>
            <div class="scrollIndicator"></div>    
            </div>
            </div>     
                
            </section>
                
                    
                            <section class="protokolle full padded">
                               
                           <div class="slider">
                               
                          
                            
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                            
                            <?php if (in_category("protokoll")){?>
                                
                            <div class="carousel-cell">
                            <div class="imgContainer">  
                            <?php the_post_thumbnail( $size = 'teaser' ); ?> 
                            </div>      
                            <div class="text">  
                                <h2><a href="<?php the_permalink() ?>"><?php the_cfc_field('quote', 'zitat'); ?></a></h2>
                            <a class="moreBtn white" href="<?php the_permalink() ?>">Zum Protokoll</a>   
                            </div>     
                            </div>
                                
                            <?php if( $wp_query->current_post == 4 ){?> </div> </section><section class="padded"><div class="content"><div class="innerContent"><?php } ?> 
                                
                
                            <?php } else { ?>
                            
                
                            <?php if( $wp_query->current_post == 9){?></div></div></section><section class="padded full facts"><div class="content"><div class="innerContent"><div class="doubleCol"><div class="innerContent"><?php } ?>
                
                             <?php if( $wp_query->current_post == 12){?></div></div></section><section class="padded"><div class="content"><div class="innerContent"><?php } ?>
                
                             <?php if( $wp_query->current_post == 15){?></div></div></section><section class="padded full quiz"><div class="content"><div class="innerContent"><?php } ?>
                
                             <?php if (in_category('quiz')) { ?>
                            
                                <article id="post-<?php the_ID(); ?>" <?php post_class();?> >
                                <div class="text">
                                <h3>Selbsttest</h3>
                                <h2><?php the_title(); ?></h2>
                                <a class="moreBtn white" href="<?php the_permalink() ?>">Test starten</a> 
                                </div> 
                                    
                                   
                                
                                
                            <?php } else if (in_category('video')) { ?>
                
                               <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); ?>
                               <?php $vidId = get_post_meta($post->ID, "videoID", true); ?>
                                
                
                                <article id="post-<?php the_ID(); ?>" <?php post_class();?> data-id="<?php echo $vidId ?>" style="background-image:url(<?php echo $url[0]; ?>)">
                                <div class="text">
                                <h3>Video</h3>
                                <h2><?php the_title(); ?></h2>
                                 <a class="moreBtn white play" href="">Ansehen</a>       
                                </div>
                                    
                            <?php } else if (in_category('zahl')) { ?>
                                    
                              <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            
								<header>
                                    <div class="text big">
                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_content(); ?></p>
                                    
                                    </div>
                                </header>
                                    
                                    
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
                                    
                            <?php if( $wp_query->current_post == 10){?></div></div><?php } ?>        
                                
                            <?php } ?>
							</article>
                                    
                            <?php if( $wp_query->current_post == 15 ){?></div></div></section><?php } ?> 
                         
                            <?php } ?>

							<?php endwhile; endif; ?>

                           
                    
				

			</div>


<?php get_footer(); ?>
