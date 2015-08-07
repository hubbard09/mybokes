
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
            echo '<a class="dope" href="dope.php">新消息'.'('.$onef.')'.'</a>';
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
				<div class="rows">
					<div class="col-full">
						<div class="wrap-col">
							<article>
                                <div class="st">
								<div class="heading"><h1 class="title">精彩文章</h1></div>
                                    <div class="sts"><a href="add_post.php"> 添加新文章</a>&nbsp;<a href="hide.php"> 管理隐藏文章</a></div>
                                </div>
                                <form name="del_batch" action="del_batch.php" method="post">

                                <?php while ($rowp =mysql_fetch_array($result)) {
                                ?>
                                <div class="contents">
                                    <div class="yk">
                                        <p>
                                            <input name="id[]" type="checkbox" id="id[]" value="<?php echo $rowp['id']?>" />&nbsp;<?php echo $rowp['title'] ?>
                                           <a class="aa" href="delete.php?p=<?php echo $rowp['id'] ?>">删除</a>
                                           <a class="aa" href="post.php?p=<?php echo $rowp['id'] ?>">编辑</a>
                                            <?php if($rowp['hide'] == 'T') { ?>
                                           <a class="aa" href="hide_no.php?p=<?php echo $rowp['id'] ?>">不显示</a>
                                            <?php } else { ?>
                                            <a class="aa" href="hide_yes.php?p=<?php echo $rowp['id'] ?>">显示</a>
                                             <?php } ?>
                                            <?php if($rowp['top'] == 'T') { ?>
                                            <a class="aa" href="top_no.php?p=<?php echo $rowp['id'] ?>">取消置顶</a>
                                            <?php } else { ?>
                                            <a class="aa" href="top_yes.php?p=<?php echo $rowp['id'] ?>">置顶</a>
                                            <?php } ?>
                                         </p>
                                    </div>
                                </div>
                                <div class="extras">
                                    <p><?php  $text = substr($rowp['content'],0,100);
                    echo $text; echo "&nbsp;&nbsp;&nbsp;&nbsp;发布人_" .$rowp['user'] ."&nbsp;&nbsp;发布时间_" .$rowp['lastdate']; ?></p>
                                </div>
                                <hr width=100% size=1 color=#c2c2c2 style="border:3 double green">
                                <?php } ?>
                                    <script type="text/javascript" language="javascript">
                                        function selectBox(selectType){
                                            var checkboxis = document.getElementsByName("id[]");
                                            if(selectType == "reverse"){
                                                for (var i=0; i<checkboxis.length; i++){
                                                    //alert(checkboxis[i].checked);
                                                    checkboxis[i].checked = !checkboxis[i].checked;
                                                }
                                            }
                                            else if(selectType == "all")
                                            {
                                                for (var i=0; i<checkboxis.length; i++){
                                                    //alert(checkboxis[i].checked);
                                                    checkboxis[i].checked = true;
                                                }
                                            }
                                        }
                                    </script>
                                    <div class="reverse">
                                        <input class="reverses" type="button" value="全选"  onClick="selectBox('reverse')"/>
                                        &nbsp;|&nbsp;<input class="reverses" type="submit" name="btnSave"  value="批量删除"/>
                                    </div>
                                </form>
                               <div class="ss"><?php echo "总共有".$page_count."页&nbsp;|&nbsp;"."第".$page_num."页&nbsp;|&nbsp;" .$page_string; ?></div>
							</article>
						</div>
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