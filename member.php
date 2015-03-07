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
          <p>部員用ページです</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>