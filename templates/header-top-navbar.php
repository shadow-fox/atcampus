<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner row-fluid">
    <div class="container">
      <div class="span2">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>      
        <a class="brand" href="<?php echo home_url(); ?>/">
          <?php bloginfo('name'); ?>
        </a>      
      </div>
      <div class="span7">
        <nav class="nav-main nav-collapse" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>  
      </div>
      <div class="span3">
        <form id="login" action="login" method="post">
          <p class="status"></p>
          <label for="username">Username</label>
          <input id="username" type="text" name="username">
          <label for="password">Password</label>
          <input id="password" type="password" name="password">
          <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
          <input class="submit_button" type="submit" value="Login" name="submit">
          <a class="close" href="">(close)</a>
          <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
        </form>
        <?php if (is_user_logged_in()) { ?>
          <span class="logout-button">
            <a class="login_button" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
          </span>
          <span class="author-image">
            <?php global $current_user;
              get_currentuserinfo();
              echo get_avatar( $current_user->ID, 32 );
            ?>
          </span>
          <span class="user-info">
          <?php
            wp_get_current_user();
            echo 'Username: ' . $current_user->user_login . '<br />';
            echo 'Email ID: ' . $current_user->user_email . '<br />';
            echo 'Name: ' . $current_user->user_firstname . " " . $current_user->user_lastname ;
          ?>
        </span>
          <?php } else { ?>
          <a class="login_button" id="show_login" href="">Login</a>
        <?php } ?>
      </div>
    </div>
  </div>
</header>
