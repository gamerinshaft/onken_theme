<?php add_theme_support('post-thumbnails'); ?>
<?php
function login_logo() {
echo '<style type="text/css">
#login h1 a {
background: url('.get_bloginfo('template_directory').'/img/login.png) no-repeat;
background-size: contain;
width: 150px;
height: 150px;
border: double 4px #555;
border-radius: 50%;
}
#login h1:before {
  display: block;
  content: "音楽研究会ログインページ";
  margin-bottom: 16px;
  -webkit-font-smoothing: antialiased;
  font-weight: normal;
  color: #555;
}
</style>';
}
add_action('login_head', 'login_logo');
?>