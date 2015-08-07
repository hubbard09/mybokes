<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
	<title>chinaz</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates Designed by Kimmy | zerotheme.com">
	<meta name="author" content="sc.chinaz.com">

    <!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
        <script src="css/top.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

	<link href='./images/7.jpg' rel='icon' type='image/x-icon'/>

</head>
<body>
<div class="wrap-body">
    <!--------------Header--------------->
    <header>
        <div class="wrap-header zerogrid">
            <div class="login">
                <a href="../../admin/index.php">
                    <?php if(isset($_SESSION['username'])) {
                        echo $_SESSION['username'].'<a class="loadover" href="loadover_a.php">注销</a>'; } else {
                    ?>
                </a>
            </div>
            <div class="login"><a href="login.php"><?php echo "登录"; } ?></a> </div>
            <div class="logins"> <a href="admin/login.php">管理员登录</a></div>
            <div id="logo"><a href="#"><img src="./images/9-1.jpg"/></a></div>
            <nav>
                <div class="wrap-nav">
                    <div class="menu">
                        <ul>
                            <li><a href="index.php">正房</a></li>
                            <li><a href="article.php">精彩文章</a></li>
                            <li><a href="Message-Board.php">留下爪子</a></li>
                            <li><a href="about-me.php">关于我</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>