<?php
/*
Template Name: home
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/programming_back.jpg':$image_url[0];
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
    <div class="main">
      <div class="items">
        <div class="row">
          <div class="col-sm-3 col-xs-12 item-wrap">
            <div class="item">
              <i class="fa fa-question-circle"></i>
              <p>アバウト</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <div class="item">
              <i class="fa fa-bell-o"></i>
              <p>新入生へ</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <div class="item">
              <i class="fa fa-desktop"></i>
              <p>実装した機能</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12 item-wrap">
            <div class="item">
              <i class="fa fa-send"></i>
              <p>コンタクト</p>
            </div>
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
                <!-- <?php the_title(); ?> -->
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>