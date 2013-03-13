<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav class="nav-main nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
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
    <a class="login_button" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php } else { ?>
    <a class="login_button" id="show_login" href="">Login</a>
<?php } ?>
    </div>
  </div>
</header>
