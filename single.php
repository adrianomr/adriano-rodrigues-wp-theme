<?php get_header();?>
    <!-- Post Section -->
    <section id="post">
        <div class="container my-5">

            <div class="row">
                <!--Post-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-12 col-md-9 col-lg-9 my-5">
                    <img src="img/portfolio/game.png" alt="" class="img-fluid">
                    <h2><?php echo the_title();?></h2>
                    <p class="lead">Fecha</p>
                    <div class="text-justify">
                        <?php the_content(); ?>

                    </div>
                </div>
                <?php endwhile; else : ?>
	                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                <!--Right Bar-->
                <div class="col-12 col-md3 col-lg-3 my-5">
                    <div class="my-3">
                        <h3>Lorem Ipsum</h3>
                        <img src="img/portfolio/game.png" alt="" class="img-fluid">
                    </div>
                    <div class="my-3">
                        <h3>Lorem Ipsum</h3>
                        <img src="img/portfolio/game.png" alt="" class="img-fluid">
                    </div>
                    <div class="my-3">
                        <h3>Lorem Ipsum</h3>
                        <img src="img/portfolio/game.png" alt="" class="img-fluid">
                    </div>
                    <div class="my-3">
                        <h3>Lorem Ipsum</h3>
                        <img src="img/portfolio/game.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer();?>