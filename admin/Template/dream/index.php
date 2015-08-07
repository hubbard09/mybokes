
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
      <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
      <p>加了锁的青春，不会再因谁而推开心门。</p>
    </ul>
    <div class="avatar"><a href="#"><span>hubbard</span></a> </div>
  </section>
</div>

<article>
  <h2 class="title_tj">
    <p>文章<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
      <?php
      $sql = "select * from userpost where hide = 'T' order by id desc limit 2,6 ";
      $arti = mysql_query($sql);
      while($article = mysql_fetch_array($arti)) {
      ?>
    <h3><?php echo $article["title"] ?></h3>
    <figure><img src="<?php echo '../'.$article["images"] ?>"></figure>
    <ul>
      <p><?php  $text = substr($article['content'],0,258); echo $text ?></p>
      <a title="<?php echo $article["title"] ?>" href="post.php?p=<?php echo $article["id"] ?>" target="_blank" class="readmore">管理>></a>
    </ul>

    <p class="dateview"><span><?php echo $article["lastdate"] ?></span><span>作者：<?php echo $article["user"] ?></span><span>个人博客：[&nbsp;情感&nbsp;]</span></p>
      <?php } ?>
  </div>
  <aside class="right">
      <div class="rnav">
          <h2>栏目导航</h2>
          <ul>
              <li><a href="index.php" target="_blank">首页</a></li>
              <li><a href="add_post.php" target="_blank">添加新文章</a></li>
              <li><a class="dope" href="dope.php" target="_blank">新消息<?php echo '('. $add .')' ?></a></li>
              <li><a href="template.php" target="_blank">设置模板</a></li>
          </ul>
      </div>
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
        <?php while($message = mysql_fetch_array($messages)) { ?>
      <li><a href="Message-Board.php" target="_blank"><?php echo $message['name'].'&nbsp;：&nbsp;'. $message['content'] ?></a>
         <p><?php echo $message['lastdate'] ?></p><br/>
      </li>
      <?php } ?>
    </ul>

    </div>  
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
    <a href="#" class="weixin"> </a></aside>
</article>
<?php
include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
</html>