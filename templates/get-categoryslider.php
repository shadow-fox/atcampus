<div class="span6">
  <div class="row-fluid">
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 5 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <span class="btn category github-ribbon">
        <?php
          $category_id = get_cat_ID( 'News' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="News">News</a>
      </span>
    </div>
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 4 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>      
      <span class="btn category github-ribbon">
        <?php
          $category_id = get_cat_ID( 'Career' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="Career">Career</a>
      </span>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 5 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <span class="btn category github-ribbon">
        <?php
          $category_id = get_cat_ID( 'Technology' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="Technology">Technology</a>
      </span>
    </div>
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 4 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>      
      <span class="btn category github-ribbon">
        <?php
          $category_id = get_cat_ID( 'News' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="News">Others</a>
      </span>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 5 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <span class="btn category github-ribbon">
        <?php
          $category_id = get_cat_ID( 'News' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="News">Not Decided</a>
      </span>
    </div>
    <div class="span6">
      <ul class="rslides">
        <?php
          global $post;
          $args = array( 'numberposts' => 5, 'category' => 4 );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) :  setup_postdata($post); 
        ?>
        <li class="box">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
            }
          ?>
          <span class="caption scale-caption">
            <?php echo excerpt(15);?>
          </span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>      
      <span class="btn category  github-ribbon">
        <?php
          $category_id = get_cat_ID( 'News' );
          $category_link = get_category_link( $category_id );
        ?>
        <a href="<?php echo esc_url( $category_link ); ?>" title="News">Leave it.</a>
      </span>
    </div>
  </div>    
</div>

<div class="span3">
	
	<?php $posts = wp_get_recent_posts();
	foreach( $posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   
			$recent["post_title"].'</a> </li> ';
	}
	?>

</div>

<div class="span3">

	<ul>
		<?php
		    $blogusers = get_users('blog_id=1&orderby=nicename&role=administrator');
		    foreach ($blogusers as $user) {
		        echo '<li>' . $user->user_email . get_avatar( $size = 48) . '</li>';
		    }
		?>
	</ul>

</div>