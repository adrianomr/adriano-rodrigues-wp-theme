<h3>
	Recent Posts
</h3>
<?php
global $post;
$args = array( 'posts_per_page' => 5, 'offset'=> 0 );
$myposts = get_posts( $args );

foreach ( $myposts as $post ) : 
  setup_postdata( $post ); ?>
  <a href="<?php the_permalink(); ?>">
  <div class="card my-1 text-dark">
  <?php if ( has_post_thumbnail()){ 
                        the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid card-img-top', 'style'=>''));
                      } ?>
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?php if ( !has_post_thumbnail()){ 
                        echo the_excerpt();
                      } ?></p>
      <p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
    </div>
  </div>
  </a>
	
<?php endforeach;
wp_reset_postdata(); ?>
