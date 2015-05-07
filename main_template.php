<?php
/*
Template Name: MainTemplate
*/
?>
<?php
  $image_id = get_post_thumbnail_id();
  $image_url = wp_get_attachment_image_src($image_id, true);
  $image_url[0] = empty($image_url[0])?get_bloginfo('stylesheet_directory') . '/img/back0.png':$image_url[0];
  the_post();
  if($post->post_title == "新入生の方へ"){
    $pagename = "freshman";
  }elseif($post->post_title == "役職紹介"){
    $pagename = "position";
  }elseif($post->post_title == "メディア"){
    $pagename = "media";
  }else{
    $pagename = "error";
  }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta") ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/main_template.css">
  </head>
  <body id="main_template">
    <div class="header">
      <?php get_header(); ?>
      <div class="container">
        <div class="main__title">
          <?php the_title(); ?>
        </div>
        <nav class="navbar">
          <ul class="nav navbar-nav">
            <li <?php if($pagename == "media"){echo 'class="active"';}?>>
              <a href="<?php bloginfo('url'); ?>/media">
                メディア
              </a>
            </li>
            <li <?php if($pagename == "freshman"){echo 'class="active"';}?>>
              <a href="<?php bloginfo('url'); ?>/freshman">
                新入生の方へ
              </a>
            </li>
            <li <?php if($pagename == "position"){echo 'class="active"';}?>>
              <a href="<?php bloginfo('url'); ?>/position">
                役職紹介
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="col-md-4 sidebar-wrap">
      <div class="row">
        <div class="sidebar col-xs-12" style='background-image: url("<?php echo $image_url[0]; ?> ");'>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <div class="col-md-8 items">
      <div class="row">
        <?php $categories = get_categories(); ?>
          <?php foreach($categories as $category) :
            if($category->cat_name == $pagename) :
              query_posts('showposts=0&cat=' . $category->cat_ID);
                 while(have_posts()) :
                  the_post();
                  $sub_image_id = get_post_thumbnail_id();
                  $sub_image_url = wp_get_attachment_image_src($sub_image_id, true);
                  $sub_image_url[0] = empty($sub_image_url[0])?get_bloginfo('stylesheet_directory') . '/img/back0.png':$sub_image_url[0];
                  echo '<a href="' . get_permalink() . '"><div class="col-xs-12 item-wrap"><div class="item">';
                    echo '<div class="item__title">' . get_the_title() . '</div>';
                    ?>
                    <div class="item__image" style='background-image: url("<?php echo $sub_image_url[0]; ?> ");'></div>
                    <?
                    echo '<div class="item__content">' . mb_substr(get_the_excerpt(),0,250) . '</div>';
                  echo '</div></div></a>';
                endwhile;
              wp_reset_query();
            endif;
          endforeach;
        ?>
      </div>
    </div>
  </body>
</html>