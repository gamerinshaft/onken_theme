<?php
  if (!is_user_logged_in()) {
    auth_redirect();
  }
?>
<?php
/*
Template Name: admin
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
    <div class="container nopadding admin-content">
      <div class="col-sm-6 nopadding">
        <article class="frame live frameshadow">
          <a href="./live">
            <div class="title">
              Live 映像
            </div>
          </a>
        </article>
        <article class="frame clubroom frameshadow">
          <a href="./部室予約">
            <div class="title">
              部室予約表
            </div>
          </a>
        </article>
        <article class="frame howto frameshadow">
          <a href="./運用資料">
            <div class="title">
              HP運用資料
            </div>
          </a>
        </article>
        <article class="frame proceedings frameshadow">
          <a href="./議事録">
            <div class="title">
              部会議事録
            </div>
          </a>
        </article>
      </div>
      <div class="col-sm-6 nopadding">
        <article class="frame room frameshadow">
          <div class="title-wrap">
            <i class="fa fa-newspaper-o">
            </i>
            <div class="title">
              教室連絡
            </div>
          </div>
          <div class="schedule">
            <?php echo get('soundroom'); ?>
          </div>
        </article>
        <article class="frame settings frameshadow">
          <div class="title-wrap">
            <a href="<?php echo wp_login_url()?>">
              <i class="fa fa-gear">
              </i>
              <div class="title">
                各種設定
              </div>
            </a>
          </div>
        </article>
        <!-- <article class="frame room frameshadow">
          <i class="fa fa-volume-up">
          </i>
          <div class="title">
            諸連絡
          </div>
          <ul class="schedule">
            <li>これはテストです。</li>
            <li>こんなのがあったらいいですね</li>
          </ul>
        </article> -->
      </div>
    </div>
  </body>
</html>