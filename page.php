<?php get_header(); ?>
    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                <div class="content">
                    <div class="innerContent">
                        <header class="article-header">
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            <div class="headerImage"></div>
                        </header>
                        <section>
                            <?php the_content();?>
                        </section>
                    </div>
                </div>
            </article>
            <?php endwhile; endif; ?>
    </div>
    <?php get_footer(); ?>