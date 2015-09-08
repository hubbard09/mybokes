
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/share.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<article class="blogs">
<h1 class="t_nav"><span>好咖啡要和朋友一起品尝，好“模板”也要和同样喜欢它的人一起分享。 </span><a href="index.php" class="n1">网站首页</a><a href="article.php" class="n2">精彩文章</a></h1>
<div class="newblog left">
    <?php while($tops = mysql_fetch_array($top)) { ?>
        <h2><?php echo $tops['title'] ?></h2>
        <p class="dateview"><span>发布时间：<?php echo $tops['lastdate'] ?></span><span>作者：<?php echo $tops['user'] ?></span><span>分类：[<a href="#">情感</a>]</span><span>分类：[<a href="#">置顶</a>]</span></p>
        <figure><img src="<?php echo $tops['images'] ?>"></figure>
        <ul class="nlist">
            <p><?php  $text = substr($tops['content'],0,160); echo $text ?></p>
            <a  href="post.php?p=<?php echo $tops['id'] ?>" target="_blank" class="readmore">详细信息>></a>
        </ul>
    <?php  } ?>
    <?php while($row = mysql_fetch_array($result)) { ?>
   <h2><?php echo $row['title'] ?></h2>
   <p class="dateview"><span>发布时间：<?php echo $row['lastdate'] ?></span><span>作者：<?php echo $row['user'] ?></span><span>分类：[<a href="#">情感</a>]</span></p>
    <figure><img src="<?php echo $row['images'] ?>"></figure>
    <ul class="nlist">
      <p><?php  $text = substr($row['content'],0,160); echo $text ?></p>
      <a  href="post.php?p=<?php echo $row['id'] ?>" target="_blank" class="readmore">详细信息>></a>
    </ul>
    <?php  } ?>
    <div class="line"></div>
    <div class="blank"></div>
    <div class="ss"><?php echo "总共有".$page_count."页&nbsp;|&nbsp;"."第".$page_num."页&nbsp;|&nbsp;" .$page_string; ?></div>
</div>
<aside class="right">
   <div class="rnav">
      <h2>栏目导航</h2>
      <ul>
       <li><a href="index.php" target="_blank">首页</a></li>
       <li><a href="article.php" target="_blank">精彩文章</a></li>
              <li><a href="Message-Board.php" target="_blank">留言版</a></li>
       <li><a href="about-me.php" target="_blank">关于我</a></li>
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
        <?php
        $sql = "select * from message_board order by id desc limit 3 ";
        $messages = mysql_query($sql);
        while($message = mysql_fetch_array($messages)) {
         ?>
            <li><a href="Message-Board.php" target="_blank"><?php echo $message['name'].'&nbsp;：&nbsp;'. $message['content'] ?></a>
                <p><?php echo $message['lastdate'] ?></p><br/>
            </li>
        <?php } ?>
    </ul>
    </div>
    <div class="visitors">
      <h3><p>最近访客</p></h3>
      <ul>

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
</aside>
</article>
<?php
include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
