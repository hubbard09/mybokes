
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<article class="blogs">
<h1 class="t_nav"><span>“慢生活”不是懒惰，放慢速度不是拖延时间，而是让我们在生活中寻找到平衡。</span><a href="index.php" class="n1">网站首页</a><a href="#" class="n2">回复</a></h1>
<div class="newblog left">
    <div class="comment">
    <form id="contact-form" method="post">
        <textarea rows="25px" cols="80px" class="inputr" name="content"/><?php echo $row['content'] ?></textarea>
        <div class="info">  <label><input class="inputs" name="name" value="<?php echo $row['name'] ?>"/></label></div>
        <div class="buttons">
            <INPUT class="inpute" TYPE="submit" name="submit" value="回复留言" />
        </div>
        </fieldset>

    </form>
    <div class="line"></div>
    <div class="blank"></div>
    </div>
</div>
<aside class="right">
   <div class="rnav">
      <ul>
       <li class="rnav1"><a href="index.php" target="_blank">首页</a></li>
       <li class="rnav2"><a href="article.php" target="_blank">精彩文章</a></li>
       <li class="rnav3"><a href="Message-Board.php" target="_blank">留言版</a></li>
       <li class="rnav4"><a href="about-me.php" target="_blank">关于我</a></li>
     </ul>      
    </div>

<div class="news">
<h3>
      <p>最新<span>文章</span></p>
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
