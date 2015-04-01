<?php
$post = $wp_query->post;
if (false) {
include(TEMPLATEPATH.'/circle_single.php');
} elseif(false) {
include(TEMPLATEPATH.'/project_single.php');
} else {
include(TEMPLATEPATH.'/main_single.php');
}
?>