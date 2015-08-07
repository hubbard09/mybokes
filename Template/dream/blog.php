
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/new.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="index.php">首页</a>&nbsp;&gt;&nbsp;<a href="article.php">精彩文章</a>&nbsp;&gt;&nbsp;<a href="#"><?php echo $rowone['title'] ?></a></span><a href="index.php" class="n1">网站首页</a><a href="#" class="n2"><?php echo $rowone['title'] ?></a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?php echo $rowone['title'] ?></h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo $rowone['lastdate'] ?></span><span>编辑：<?php echo $rowone['user'] ?></span></p>
    <ul class="infos">
        <?php $text = substr($rowone['content'],0,500); echo $text ?>
      <img src="<?php echo $rowone['images'] ?>">
        <?php $text = substr($rowone['content'],500,10000); echo $text ?>
    </ul>
    <div class="ad"> </div>
    <div class="nextinfo">
      <p>上一篇：<a href="post.php?p=<?php echo $readsh['id'] ?>"><?php echo $readsh['title'] ?></a></p>
      <p>下一篇：<a href="post.php?p=<?php echo $readxia['id'] ?>"><?php echo $readxia['title'] ?></a></p>
    </div>
      <div class="box">
          <div class="heading"><h2 class="title">最新评论</h2></div>
          <div class="xian"></div>
          <div class="contentf">
              <?php while($rowtwo = mysql_fetch_array($result)) {
                  if($rowtwo['audit'] == 'T') { ?>
                      <p><?php echo $rowtwo['name'] ?></p>
                      <p><?php echo $rowtwo['content'] ?></p>
                      <p><?php echo $rowtwo['lastdate'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="comment_reply.php?p=<?php echo $rowtwo['id'] ?>">说一句</a>
                      </p>
                      <div class="xian"></div>
                      <?php
                      $sql = "select * from admin_reply where messageid = {$rowtwo['id']}";
                      $queryone = mysql_query($sql);
                      while($yh = mysql_fetch_array($queryone)) {
                          if($yh['audit'] == 'T') {
                              ?>
                              <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['content'] ?></p>
                              <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['lastdate'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="comment_reply_1.php?p=<?php echo $yh['id'] ?>">说一句</a></p>
                              <div class="xian"></div>
                          <?php
                          }
                      }
                  }
              }
              ?>
          </div>
          <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
      </div>
      <div id="comment">
          <h3>评论</h3>

          <form id="contact-form" method="post">
              <fieldset>
                  <label>
                      <?php
                      if(isset($_SESSION['username']) == "") {
                          $_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
                          echo "请登录您的帐号。";
                      } else {
                          echo $_SESSION['username'];
                      }
                      ?>
                  </label>
                  <textarea name="content" onBlur="if(this.value=='') this.value='content'" onFocus="if(this.value =='content' ) this.value=''">content</textarea>
                  <div class="buttons">
                      <INPUT TYPE="submit" name="submit" value="提交评论" />
                  </div>
              </fieldset>
          </form>
      </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
          <?php
          $sql = "select * from userpost order by id desc limit 6";
          $related = mysql_query($sql);
         while($relateds = mysql_fetch_array($related)){  ?>
        <li><a href="post.php?p=<?php echo $relateds['id'] ?>" ><?php echo $relateds['title'] ?></a></li>
          <?php } ?>
      </ul>
    </div>
  </div>
  <aside class="right">
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->
    <div class="blank"></div>
      <div class="news">
          <h3>
              <p>最新<span>文章</span></p>
          </h3>
          <ul class="rank">
              <?php
              $sql = "select * from userpost where hide = 'T' order by id desc limit 6 ";
              $new = mysql_query($sql);
              while($newarticle = mysql_fetch_array($new)) {
                  ?>
                  <li><a href="post.php?p=<?php echo $newarticle['id'] ?>"  target="_blank"><?php echo $newarticle['title'] ?></a></li>
              <?php } ?>
          </ul>
          <h3 class="ph">
              <p><a href="Message-Board.php"> 最新<span>留言</span></a></p>
          </h3>
          <ul class="paih">
              <?php
              $sql = "select * from message_board where audit = 'T' order by id desc limit 3 ";
              $messages = mysql_query($sql);
              while($message = mysql_fetch_array($messages)) {
                      ?>
                      <li><a href="Message-Board.php" target="_blank"><?php echo $message['name'] . '&nbsp;：&nbsp;' . $message['content'] ?></a>
                      </li>
                  <?php
              }
              ?>
          </ul>

      </div>
      <div class="visitors">
      <h3>
        <p>最近访客</p>
      </h3>
      <ul>
      </ul>
    </div>
  </aside>
</article>
<?php
include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
