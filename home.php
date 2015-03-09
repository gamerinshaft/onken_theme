<?php
/*
Template Name: home
*/
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">
  </head>
  <body>
    <?php get_header(); ?>
    <div class="table">
      <div class="table-cell">
        <div class="text-center">
          <p>音楽研究会にようこそ。</p>
          <a href="<?php bloginfo('url'); ?>/member">
            <div class="btn btn-primary">
              部員用ページへ
            </div>
          </a>
        </div>
      </div>
    </div>

  </body>
</html>