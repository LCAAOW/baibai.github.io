  <footer id="fh5co-footer">
    <div class="container">
      <div class="row row-bottom-padded-md">
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>模板分类</h3>
            <ul class="fh5co-links">
              <li><a href="../index.php" target="_blank">表白网页制作</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>技术支持</h3>
            <ul class="fh5co-links">
              <li><a href="https://imgse.com/" target="_blank">图片外链</a></li>
              <li><a href="../yinyue.php" target="_blank">音乐外链</a></li>
              <li><a href="../liuyan.php" target="_blank">留言反馈</a></li>
              <li><a href="https://www.wwru.cn/1673.html" target="_blank">Mx博客</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>关于我们</h3>
            <p>客服QQ：<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlspecialchars(urldecode($qq)); ?>&site=qq&menu=yes" target="_blank" title="QQ号：<?php echo htmlspecialchars(urldecode($qq)); ?>"><?php echo htmlspecialchars(urldecode($qq)); ?></a><br><br>
            E-mail：<a href="mailto:<?php echo htmlspecialchars(urldecode($email)); ?>"><?php echo htmlspecialchars(urldecode($email)); ?></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 animate-box">
          <div class="fh5co-footer-widget">
            <h3>二维码</h3>
            <div class="col-md-8 col-sm-6 col-xs-4">
                <img src="<?php if(!preg_match("/^(http|https):/", htmlspecialchars(urldecode($footewm)))) echo '../'; echo htmlspecialchars(urldecode($footewm)); ?>" class="img-thumbnail img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fh5co-copyright animate-box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="fh5co-left"><small>&copy; 2023 <a href="./" target="_blank"><?php echo htmlspecialchars(urldecode($title)); ?></a> Corporation.&nbsp;<?php echo urldecode($tonji); ?></small></p>
            <p class="fh5co-right"><small class="fh5co-right"><a><?php echo htmlspecialchars(urldecode($right_foot)); ?></a></small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>