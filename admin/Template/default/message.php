﻿
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
    <link rel="stylesheet" href="../css/zerogrid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->

    <link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>

</head>
<body>
<div class="wrap-body">
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
        <div class="login"><a href="../admin/index.php"> <?php if(isset($_SESSION['username'])) {
              echo $_SESSION['username'].'<a class="loadover" href="../loadover.php">注销</a>';
            echo '<a class="dope" href="dope.php">新消息'.'('.$twof.')'.'</a>';
            } else {
            ?>
            </a></div>
        <div class="login"><a href="login.php"><?php echo "登录"; } ?></a> </div>
		<div id="logo"><a href="http://sc.chinaz.com"><img src="../images/9-1.jpg"/></a></div>
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

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block">
			<div id="main-content" class="col-2-3">
				<div class="row">
					<div class="col-full">
						<div class="wrap-col">
							<article>
								<div class="heading"><h1 class="title">留言版</h1></div>
								<div class="contents">
									<p>被赞的留言</p>
								</div>
                                <div class="extras">
                                <?php while($row = mysql_fetch_array($query)) { ?>

									<p><?php echo $row['name'] ?></p>
                                    <p><?php echo $row['content'] ?></p>
                                    <p><?php echo $row['lastdate'] ?>
                                        &nbsp;&nbsp;
                                        <?php if($row['audit'] == 'F') { ?>
                                        <a href="message_audit.php?p=<?php echo $row['id'] ?>">通过</a>
                                       <?php  }  else {  ?>
                                       <a href="message_audit_not.php?p=<?php echo $row['id'] ?>">不通过</a>
                                       <?php  } ?>
                                        &nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $row['id'] ?>">赞一个<?php echo'('.$row['Praise'].')'?>
                                        &nbsp;&nbsp;</a><a href="message_reply.php?p=<?php echo $row['id'] ?>">回复</a>
                                        &nbsp;&nbsp;<a href="editorial_message.php?p=<?php echo $row['id'] ?>">编辑</a>
                                        &nbsp;&nbsp;<a href="delete_message.php?p=<?php echo $row['id'] ?>">删除</a>
                                    </p>
                                    <div class="classone"></div>
                                    <?php
                                    $sql = "select * from message_board_reply where messageid = {$row['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yh = mysql_fetch_array($queryone)) {
                                 ?>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['content'] ?></p>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['lastdate'] ?>
                                        <?php if($yh['audit'] == 'F') { ?>
                                        <a href="message_audit_reply.php?p=<?php echo $yh['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;通过</a>
                                        <?php  }  else {  ?>
                                        <a href="message_audit_not_reply.php?p=<?php echo $yh['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;不通过</a>
                                        <?php  } ?>
                                    </p>

                                     <div class="classone"></div>
                                    <?php
                                     }
                            }
                                  ?>
                                  </div>
                                <div class="box">
                                <div class="heading"><h4 class="title">最新爪子</h4></div>
                                    <div class="contentf">
                                    <?php while($rowone = mysql_fetch_array($querytwo)) { ?>
                                    <p><?php echo $rowone['name'] ?></p>
                                    <p><?php echo $rowone['content'] ?></p>
                                    <p><?php echo $rowone['lastdate'] ?>&nbsp;
                                        <?php if($rowone['audit'] == 'F') { ?>
                                        <a href="message_audit.php?p=<?php echo $rowone['id'] ?>">通过</a>
                                        <?php  }  else {  ?>
                                        <a href="message_audit_not.php?p=<?php echo $rowone['id'] ?>">不通过</a>
                                        <?php  } ?>
                                        &nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $rowone['id'] ?>">赞一个<?php echo '('.$rowone['Praise'].')'?></a>
                                        &nbsp;&nbsp;</a><a href="message_reply.php?p=<?php echo $rowone['id'] ?>">回复</a>
                                        &nbsp;&nbsp;<a href="editorial_message.php?p=<?php echo $rowone['id'] ?>">编辑</a>
                                        &nbsp;&nbsp;<a href="delete_message.php?p=<?php echo $rowone['id'] ?>">删除</a>
                                    </p>
                                    <div class="classone"></div>
                                    <?php
                                    $sql = "select * from message_board_reply where messageid = {$rowone['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yd = mysql_fetch_array($queryone)) {
                                 ?>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yd['content'] ?></p>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yd['lastdate'] ?>
                                        <?php if($yd['audit'] == 'F') { ?>
                                        <a href="message_audit_reply.php?p=<?php echo $yd['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;通过</a>
                                        <?php  }  else {  ?>
                                        <a href="message_audit_not_reply.php?p=<?php echo $yd['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;不通过</a>
                                        <?php  } ?></p>
                                    <div class="classone"></div>
                                    <?php
                                     }
                                 }
                                     ?>
                                </div>
                                    <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
                                     </div>
							</article>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h4 class="title">联系我</h4></div>
						<div class="content">
							<div class="connect">
								<a href="#"><img src="../images/socials/facebook-icon.png" title="facebook"/></a><a href="#"><img src="../images/socials/google-plus-icon.png" title="google plus"/></a><a href="#"><img src="../images/socials/twitter-icon.png" title="twitter" /></a><a href="#"><img src="../images/socials/pinterest-icon.png" title="pin"/></a><a href="#"><img src="../images/socials/rss-icon.png" title="rss"/></a>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">资料</h4></div>
						<div class="content">
							<div class="posts">
                                <p>
                                <p>网名：bobby | 孤舟</p>
                                <p> 姓名：郭海波</p>
                                <p>籍贯：广东省河源市</p>
                                <p>现居：深圳市沙头角</p>
                                <p>职业：网站设计、PHP后端编写</p>
                                <p> 兴趣：篮球、羽毛球、跑步、听歌</p>
                                <p>喜欢的书：《红与黑》《红楼梦》</p>
                                <p>喜欢的音乐：《burning》《bay romance》《卡农》</p>
                                </p>
							</div>
						</div>
					</div>
                    <div class="box">
                        <div class="heading"><img src="../images/8.jpg"> </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php
    include "footer.php";
?>

</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>