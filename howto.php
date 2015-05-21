<?php
  if (!is_user_logged_in()) {
    auth_redirect();
  }
?>
<?php
/*
Template Name: howto
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/admin.css">
  </head>
  <body>
    <?php get_header("admin"); ?>
    <div class="container nopadding">
      <div class="archive-list">
        <ul>
          <?php $categories = get_categories(); ?>
          <?php foreach($categories as $category) :
            if($category->cat_name == "howto") :
              query_posts('showposts=0&cat=' . $category->cat_ID);
                 while(have_posts()) :
                  the_post();
                  echo '<div class="col-sm-6 nopadding">';
                  echo '<li class="frameshadow"><a href="'. get_permalink() . '">' . get_the_title() . '</a></li>';
                  echo '</div>';
                endwhile;
              wp_reset_query();
            endif;
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </body>
</html>
