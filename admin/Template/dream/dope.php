
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/template.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
     include "header.php";
?>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="index.php">首页</a>&nbsp;&gt;&nbsp;<a href="#">消息</a></span><a href="index.php" class="n1">网站首页</a><a href="#" class="n2">消息</a></h1>
  <div class="index_about">
        <h2> 文章评论</h2>
        <ul class="infos">
            <?php while($row = mysql_fetch_array($query)) { ?>
            <p><?php echo $row['name'] ?></p>
            <p><?php echo $row['content'] ?></p>
            <p><?php echo $row['lastdate'] ?>
                <a href="pass_dope/comment.php?p=<?php echo $row['id'] ?>">&nbsp;&nbsp;通过</a>
                &nbsp;&nbsp;<a href="comment_reply.php?p=<?php echo $row['id'] ?>">回复</a>
                &nbsp;&nbsp;<a href="del_dope/delete_comment.php?p=<?php echo $row['id'] ?>">删除</a>
            </p>
            <?php } ?>
        </ul>
      <h2> 留言</h2>
      <ul class="infos">
          <?php while($rowone = mysql_fetch_array($result)) { ?>
              <p><?php echo $rowone['name'] ?></p>
              <p><?php echo $rowone['content'] ?></p>
              <p><?php echo $rowone['lastdate'] ?>
                  <a href="pass_dope/message_board.php?p=<?php echo $rowone['id'] ?>">&nbsp;&nbsp;通过</a>
                  &nbsp;&nbsp;<a href="message_reply.php?p=<?php echo $rowone['id'] ?>">回复</a>
                  &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $rowone['id'] ?>">删除</a>
              </p>
          <?php } ?>
      </ul>   <h2> 留言回复</h2>
      <ul class="infos">
          <?php while($fou = mysql_fetch_array($ff)) { ?>
              <p><?php echo $fou['name'] ?></p>
              <p><?php echo $fou['content'] ?></p>
              <p><?php echo $fou['lastdate'] ?>
                  <a href="pass_dope/message_reply.php?p=<?php echo $fou['id'] ?>">&nbsp;&nbsp;通过</a>
                  &nbsp;&nbsp;<a href="message_reply_1.php?p=<?php echo $fou['id'] ?>">回复</a>
                  &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $fou['id'] ?>">删除</a>
              </p>
          <?php } ?>
      </ul>   <h2> 文章评论回复</h2>
      <ul class="infos">
          <?php while($threef = mysql_fetch_array($three)) { ?>
              <p><?php echo $threef['name'] ?></p>
              <p><?php echo $threef['content'] ?></p>
              <p><?php echo $threef['lastdate'] ?>
                  <a href="pass_dope/comment_reply.php?p=<?php echo $threef['id'] ?>">&nbsp;&nbsp;通过</a>
                  &nbsp;&nbsp;<a href="comment_reply_1.php?p=<?php echo $threef['id'] ?>">回复</a>
                  &nbsp;&nbsp;<a href="del_dope/delete_comment_reply.php?p=<?php echo $threef['id'] ?>">删除</a>
              </p>
          <?php } ?>
      </ul>
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
        <p>栏目<span>最新</span></p>
        </h3>
      <ul class="rank">
        <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/" title="with love for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
        <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
        <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
        <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
        <li><a href="/" title="建站流程篇――教你如何快速学会做网站" target="_blank">建站流程篇――教你如何快速学会做网站</a></li>
        <li><a href="/" title="box-shadow 阴影右下脚折边效果" target="_blank">box-shadow 阴影右下脚折边效果</a></li>
        <li><a href="/" title="打雷时室内、户外应该需要注意什么" target="_blank">打雷时室内、户外应该需要注意什么</a></li>
      </ul>
      <h3 class="ph">
        <p>点击<span>排行</span></p>
      </h3>
      <ul class="paih">
        <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
        <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
        <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
        <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
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
