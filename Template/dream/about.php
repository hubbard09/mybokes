
<head>
    <?php
    include "head.php";
    ?>
<link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
include "header.php";
?>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.php" class="n1">网站首页</a><a href="about-me.php" class="n2">关于我</a></h1>
<div class="about left">
  <h2>Just about me</h2>
    <ul> 
    <?php echo $row['Life_motto'] ?>
    </ul>
    <h2>About my blog</h2>
    <p>域  名：www.yangqq.com 创建于2011年01月12日 <a href="/" class="blog_link" target="_blank">注册域名</a></p>
    <p>服务器：阿里云服务器<a href="/" class="blog_link" target="_blank">购买空间</a></p>
    <p>备案号：蜀ICP备11002373号-1</p>
    <p>程  序：PHP 帝国CMS7.0</p>
</div>
<aside class="right">  
    <div class="about_c">
    <p><?php echo $row['net_name'] ?></p>
    <p><?php echo $row['name'] ?> </p>
    <p><?php echo $row['lastdate'] ?></p>
    <p><?php echo $row['origin'] ?></p>
    <p><?php echo $row['Live'] ?></p>
    <p><?php echo $row['Occupation'] ?></p>
    <p><?php echo $row['Interest'] ?></p>
    <p><?php echo $row['Book'] ?></p>
    <p><?php echo $row['Music'] ?></p>
</div>
</aside>
</article>
<?php
include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
