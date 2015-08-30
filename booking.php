<?php
  if (!is_user_logged_in()) {
    auth_redirect();
  }
?>
<?php
/*
Template Name: booking
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/admin.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/booking.css">
  </head>
  <body>
    <?php get_header("admin"); ?>
    <div class="container nopadding">
      <?php the_post(); ?>
      <?php the_content(); ?>
    </div>
  </body>
</html>
