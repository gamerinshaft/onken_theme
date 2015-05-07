<?php
/*
Template Name: home
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/bg-image.jpg':$image_url[0];
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
      <div class="top__image" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
      </div>
      <div class="table">
        <div class="table-cell">
          <div class="container">
            <div class="top__word">
              <h1><?php echo get_post_meta($post->ID, "代", true); ?></h1>
              <h2>東京理科大学<br>音楽研究会</h2>
              <p><?php echo get_post_meta($post->ID, "謳い文句", true); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="top__bar">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/top-header.png">
      </div>
    </div>
    <div class="main">
      <div class="items">
        <div class="row">
          <div class="col-sm-3 col-xs-12 item-wrap">
            <a href="<?php bloginfo('url'); ?>/media">
              <div class="item">
                <i class="fa fa-desktop"></i>
                <p>メディア</p>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <a href="<?php bloginfo('url'); ?>/freshman">
              <div class="item">
                <i class="fa fa-bullhorn"></i>
                <p>新入生の方へ</p>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <a href="<?php bloginfo('url'); ?>/position">
              <div class="item">
                <i class="fa fa-sitemap"></i>
                <p>役職紹介</p>
              </div>
            </a>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <a href="" data-toggle="modal" data-target=".contact_form">
              <div class="item">
                <i class="fa fa-send"></i>
                <p>コンタクト</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer class="info">
      <div class="container">
        <div class="row">
          <div class="left-art col-sm-5 col-xs-6">
            <div class="table">
              <div class="table-cell">
                <div class="info-icon">
                  <i class="fa fa-info"></i>
                </div>
                <p class="info-title">
                  新着情報
                </p>
              </div>
            </div>
          </div>
          <div class="right-art col-sm-7 col-xs-6">
            <div class="table">
              <div class="table-cell">
                <?php the_post() ?>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>