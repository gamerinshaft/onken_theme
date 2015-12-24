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
        <article class="frame info frameshadow">
          <div class="title-wrap">
            <i class="fa fa-weixin"></i>
            <div class="title">
              お知らせ
            </div>
          </div>
          <div class="content">
            <?php echo get('admininfo'); ?>
          </div>
        </article>
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
              部室予約
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
            <a href="<?php echo get_admin_url()?>">
              <i class="fa fa-gear">
              </i>
              <div class="title">
                各種設定
              </div>
            </a>
          </div>
        </article>
        <article class="frame howto frameshadow">
          <div class="title-wrap">
            <a href="./運用資料">
              <i class="fa fa-file-text">
              </i>
              <div class="title">
                HP運用資料
              </div>
            </a>
          </div>
        </article>
        <article class="frame namebooks frameshadow">
          <div class="title-wrap">
            <a href="./namebooks">
              <i class="fa fa-file-text">
              </i>
              <div class="title">
                音研部員名簿
              </div>
            </a>
          </div>
        </article>
      </div>
    </div>
  </body>
</html>
