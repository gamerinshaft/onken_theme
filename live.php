<?php
/*
Template Name: live
*/
?>
<?php
  if (!is_user_logged_in()) {
    auth_redirect();
  }
?>
<?php
  $live_content = "";
  $categories = get_categories();
  foreach($categories as $category) :
    if($category->cat_name == "live") :
      query_posts('showposts=0&cat=' . $category->cat_ID);
      while(have_posts()) :
        the_post();
        $image_single_id = get_post_thumbnail_id();
        $image_single_url = wp_get_attachment_image_src($image_single_id, true);
        $image_single_url[0] = empty($image_single_url[0])?get_bloginfo('stylesheet_directory') . '/img/circle_back.jpg':$image_single_url[0];
        $w = mt_rand(0, 100) + 200;
        $h = mt_rand(0, 100) + 200;
        $tags = get_the_tags();
        $live_content .=  '<a href="'. get_permalink() .'" class="cell" style="background-image: url(\'' . $image_single_url[0] . '\'); width:'. $w . 'px; height:' . $h . 'px; ">';
        $live_content .= "<div class='taglist'>";
        if(!empty($tags)) :
          foreach($tags as $tag) :
            $live_content .= "<span class='tag'>" . $tag->name . "</span>";
          endforeach;
        endif;
        $live_content .=  '</div>';
        $live_content .=  '<div class="title">';
        $live_content .=  get_the_title();
        $live_content .=  '</div>';
        $live_content .=  '</a>';
      endwhile;
    endif;
  endforeach;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php get_header("meta"); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/admin.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animation.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/live/live.css">
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lib/freewall.js"></script>
  </head>
  <body id="live">
    <?php the_post(); ?>
    <?php get_header("admin"); ?>
    <section class="live-content">
      <div class="container">
        <div class="row">
          <div id="live_freewall">
            <?php echo $live_content ?>
          </div>
        </div>
      </div>
    </section>
    <script>
      $(function(){
        var wall1 = new freewall("#live_freewall");
        wall1.reset({
          selector: '.cell',
          animate: true,
          cellW: 20,
          cellH: 200,
          onResize: function() {
            wall1.fitWidth();
          }
        });
        wall1.fitWidth();
        // for scroll bar appear;
        $(window).trigger("resize");
      });
    </script>
  </body>
</html>
