<?php
  if (!is_user_logged_in()) {
    auth_redirect();
  }
?>
<?php
/*
Template Name: onken_member
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
  </head>
  <body>
    <div class="table">
      <div class="table-cell">
        <div class="text-center">
          <?php the_post() ?>
          <?php the_content() ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>