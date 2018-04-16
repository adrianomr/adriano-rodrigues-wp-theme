<?php get_header();?>
    <!-- Post Section -->
    <section id="post">
        <div class="container my-5">

            <div class="row">
                <!--Post-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-12 col-md-9">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid my-5')); ?>
                </a>
                <?php endif; ?>
                    <!--<img src="<?php echo get_stylesheet_directory_uri();?>/img/portfolio/game.png" alt="" class="img-fluid">-->
                    <h2><?php echo the_title();?></h2>
                    <p class="lead"><?php echo get_the_date();?></p>
                    <div class="text-justify">
                        <?php the_content(); ?>

                    </div>
                </div>
                <?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                <!--Right Bar-->
                <div class="col-12 col-md-3 col-mx-auto my-5">
                <?php
                    get_sidebar();
                ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>