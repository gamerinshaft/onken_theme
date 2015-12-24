<?php
$post = $wp_query->post;
if (in_category('namebook')){
  include(TEMPLATEPATH.'/namebook.php');
}else if (false) {
include(TEMPLATEPATH.'/circle_single.php');
}else if(false) {
include(TEMPLATEPATH.'/project_single.php');
}else {
include(TEMPLATEPATH.'/main_single.php');
}
?>
