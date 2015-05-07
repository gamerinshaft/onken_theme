<!DOCTYPE html>

<html>
  <head>
    <?php get_header("meta") ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/main_single.css">
  </head>
  <body>
    <?php
      $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, true);
      $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/back1.png':$image_url[0];
    ?>
    <?php the_post() ?>
    <div id="main_single" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
      <div class="table">
        <div class="table-cell">
          <div class="container wsmoke">
            <div class="content">
              <div class="title">
                <?php echo the_title(); ?>
              </div>
              <?php the_content() ?>
            </div>
            <?php
              $ref = $_SERVER['HTTP_REFERER'];
              $text = "戻る";
              $text2 = "前のページへは､ブラウザの戻るボタンでお戻りください｡";

              if(isset($ref)){
              echo '<a class="back" href="'.$ref.'">'.$text."</a>";
              }
              else{
              echo $text2;
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>