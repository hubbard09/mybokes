
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
    <form id="contact-form" method="post" enctype="multipart/form-data">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="index.php" class="n1">网站首页</a><a href="about-me.php" class="n2">关于我</a></h1>
<div class="about left">
  <h2>Just about me</h2>
    <ul>
        <textarea rows="20" cols="80px"  name="content"><?php echo $row['Life_motto'] ?></textarea>
    </ul>
    <h2>About my blog</h2>
    <p>域  名：www.yangqq.com 创建于2011年01月12日 <a href="/" class="blog_link" target="_blank">注册域名</a></p>
    <p>服务器：阿里云服务器<a href="/" class="blog_link" target="_blank">购买空间</a></p>
    <p>备案号：蜀ICP备11002373号-1</p>
    <p>程  序：PHP 帝国CMS7.0</p>
</div>
<aside class="right">  
    <div class="about_c">
    <p><label><input class="inputs" name="net_name" value="<?php echo $row['net_name'] ?>" /></label></p>
    <p><label><input class="inputs" name="admin_name" value="<?php echo $row['name'] ?>"/></label></p>
    <p><label><input class="inputs" name="lastdate" value="<?php echo $row['lastdate'] ?>"/></label></p>
    <p><label><input class="inputs" name="origin" value="<?php echo $row['origin'] ?>"/></label></p>
    <p><label><input class="inputs" name="Live" value="<?php echo $row['Live'] ?>"/></label></p>
    <p><label><input class="inputs" name="Occupation" value="<?php echo $row['Occupation'] ?>"/></label></p>
    <p><label><input class="inputs" name="Interest" value="<?php echo $row['Interest'] ?>"/></label></p>
    <p><label><input class="inputs" name="Book" value="<?php echo $row['Book'] ?>"/></label></p>
    <p><label><input class="inputs" name="Music" value="<?php echo $row['Music'] ?>"/></label></p>
        <div class="buttons">
            <INPUT class="inpute" TYPE="submit" name="submit" value="修改" />
        </div>
</div>
</aside>

        </form>
</article>
<?php
include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
