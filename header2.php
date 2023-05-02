  <section id="fh5co-header">
    <div class="container">
      <nav role="navigation">
        <ul class="pull-left left-menu">
          <li><a href="../index.php">表白网页</a></li>
        </ul>
        <h1 id="fh5co-logo"><a href="../"><?php echo htmlspecialchars(urldecode($logo)); ?><span>.</span></a></h1>
        <ul class="pull-right right-menu">
          <li><a href="<?php if(!preg_match("/^(http|https):/", htmlspecialchars(urldecode($right_top_url_1)))) echo '../'; echo htmlspecialchars(urldecode($right_top_url_1)); ?>"><?php echo htmlspecialchars(urldecode($right_top_title_1)); ?></a></li>
          <li class="fh5co-cta-btn"><a id="login" href="#" data-toggle="modal" data-target="#myModal">贵宾登录</a></li>
        </ul>
        <ul class="zhong dnone">
          <li><a href="../">返回首页</a></li>
        </ul>
      </nav>
    </div>
  </section>