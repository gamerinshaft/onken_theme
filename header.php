<header class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collpse-header">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>">音楽研究会</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="collpse-header">
      <ul class="nav navbar-nav navbar-right">
       <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">メニュー <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
            <li><a href="#"><i class="fa fa-facebook"></i>FaceBook</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
        <li><a href="" data-toggle="modal" data-target=".contact_form">コンタクト</a></li>
        <li><a href="<?php bloginfo('url'); ?>/member">部員用ページ</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>


<div class="modal fade contact_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">お問い合わせ</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="318" title="コンタクトフォーム"]'); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){
    loc = location.href
    console.log(loc.match(/#wpcf7/i).length != 0);
    if(loc.match(/#wpcf7/i).length != 0){
      $(".contact_form").modal("show");
    }
  });
</script>