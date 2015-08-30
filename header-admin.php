<?php
  $user = wp_get_current_user();
//  echo $user->get('ID')."\n"; // ID
//  echo $user->get('user_login')."\n"; // ログイン名
//  echo $user->get('user_email')."\n"; // メールアドレス
//  echo $user->get('user_url')."\n"; // URL
//  echo $user->get('user_registered')."\n"; // 登録日
//  echo $user->get('user_status')."\n"; // ステータス
//  echo $user->get('display_name')."\n"; // 表示名
//  echo $user->get('user_level')."\n"; // 表示名
//  echo $user->get('user_firstname')."\n"; // 表示名
//  echo $user->get('user_lastname')."\n"; // 表示名
?>
<header id="admin" class="frameshadow">
  <div class="wrap container">
    <div class="user-status">
      <div class="user-name">
        <?php echo $user->get('user_lastname').$user->get('user_firstname'); // 表示名?>
      </div>
      <div class="user-level">
        <?php $level = $user->get('user_level');
          echo "権限:";
          switch ($level){
            case 10:
              echo "管理者";
              break;
            case 7:
              echo "編集者";
              break;
            case 2:
              echo "投稿者";
              break;
            case 1:
              echo "寄稿者";
              break;
            case 0:
              echo "購読者";
              break;
          }
        ?>
      </div>
      <div class="user-mail">
        <?php echo $user->get('user_email') ?>
      </div>
    </div>
    <div class="avatar-wrap frameshadow">
      <a href="<?php bloginfo('url'); ?>/admin">
        <?php echo get_avatar($user->get('ID'), 60)."\n"; ?>
      </a>
    </div>
  </div>
</header>
<div class="header-blank"></div>
