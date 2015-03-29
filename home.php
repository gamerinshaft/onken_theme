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
  <body id="home">
    <?php get_header(); ?>
    <div class="home__top">
      <div class="top__image">
      </div>
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <div class="top__word">
              <h1>6</h1>
              <h2>東京理科大学<br>音楽研究会</h2>
              <p>東京理科大学野田キャンパスで活動している音楽サークルです。初心者から玄人まで、サークル選びに迷った人たちがこぞって入る最大手の音楽サークルとなっています。今年から念願の部室も獲得でき、歴史は浅いですが勢いのあるサークルです。学生生活という限りある時間を、僕らと一緒に過ごしませんか？</p>
            </div>
          </div>
        </div>
      </div>
      <div class="top__bar">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top-header.png">
      </div>
    </div>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
      $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/programming_back.jpg':$image_url[0];
    ?>
    <?php the_post() ?>
    <!-- <?php the_title(); ?> -->
    <?php the_content(); ?>
  </body>
</html>