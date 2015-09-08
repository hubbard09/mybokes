
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
  <h1 class="t_nav"><span>您当前的位置：<a href="index.php">首页</a>&nbsp;&gt;&nbsp;<a href="article.php">精彩文章</a>&nbsp;&gt;&nbsp;<a href="#"><?php echo $edit['title'] ?></a></span><a href="index.php" class="n1">网站首页</a><a href="#" class="n2"><?php echo $edit['title'] ?></a></h1>
  <div class="index_about">
      <form id="contact-form" method="post" enctype="multipart/form-data">
          <h2 class="c_titile"><input name="title" value="<?php echo $edit['title'] ?>"/></h2>
    <p class="box_c"><span class="d_time">发布时间：<input name="lastdate" value="<?php echo $edit['lastdate'] ?>"/></span><span>编辑：<input name="name" value="<?php echo $edit['user'] ?>"/></span></p>
    <ul class="infos">
        <input type="file" class="inputs" name="upfile" style="width: 200px" /><?php echo "原始路径：.{$edit['images']}" ?>
        <textarea rows="20" cols="80px" class="inputr" name="content"><?php echo $edit['content'] ?></textarea>
    </ul>
          <div class="buttons">
              <INPUT class="inpute" TYPE="submit" name="submit" value="修改" />
          </div>
      <div class="box">
          <div class="heading"><h2 class="title">最新评论</h2></div>
          <div class="xian"></div>
          <div class="contentf">
              <?php while($rowtwo = mysql_fetch_array($results)) {
                   ?>
                      <p><?php echo $rowtwo['name'] ?></p>
                      <p><?php echo $rowtwo['content'] ?></p>
                      <p><?php echo $rowtwo['lastdate'] ?>
                          <?php echo $rowtwo['lastdate'] ?>&nbsp;&nbsp;
                          <?php if($rowtwo['audit'] == 'F') { ?>
                              <a href="comment_audit.php?p=<?php echo $rowtwo['id'] ?>">通过</a>
                          <?php  }  else {  ?>
                              <a href="comment_audit_not.php?p=<?php echo $rowtwo['id'] ?>">不通过</a>
                          <?php  } ?>
                          &nbsp;&nbsp;<a href="comment_reply.php?p=<?php echo $rowtwo['id'] ?>">回复</a>
                          &nbsp;&nbsp;<a href="editorial_comment.php?p=<?php echo $rowtwo['id'] ?>">编辑</a>
                          &nbsp;&nbsp;<a href="del_dope/delete_comment.php?p=<?php echo $rowtwo['id'] ?>">删除</a>
                      </p>
                      </p>
                      <div class="xian"></div>
                      <?php
                      $sql = "select * from admin_reply where messageid = {$rowtwo['id']}";
                      $queryone = mysql_query($sql);
                      while($yh = mysql_fetch_array($queryone)) {
                          ?>
                          <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yh['content'] ?></p>
                          <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yh['lastdate'] ?>
                              &nbsp;&nbsp;<?php if ($yh['audit'] == 'F') { ?>
                                  <a href="comment_audit_reply.php?p=<?php echo $yh['id'] ?>">通过</a>
                              <?php } else { ?>
                                  <a href="comment_audit_not_reply.php?p=<?php echo $yh['id'] ?>">不通过</a>
                              <?php } ?>
                              &nbsp;&nbsp;<a href="comment_reply_1.php?p=<?php echo $yh['id'] ?>">回复</a>
                              &nbsp;&nbsp;<a href="editorial_comment_1.php?p=<?php echo $yh['id'] ?>">编辑</a>
                              &nbsp;&nbsp;<a href="del_dope/delete_comment_reply.php?p=<?php echo $yh['id'] ?>">删除</a>
                          </p>
                          <div class="xian"></div>
                      <?php

                      }
              }
              ?>
          </div>
          <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
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
