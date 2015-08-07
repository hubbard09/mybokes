<?php
include 'header.php';
?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
        <a class="gotoTop" onclick="gotoTop()">返回顶部</a>
		<div class="row block">
			<div id="main-content" class="col-2-3">
				<div class="row">
					<div class="col-full">
						<div class="wrap-col">
							<article>
								<div class="heading"><h2 class="title"><a href="post.php?p=<?php echo $rowoo['id'] ?>"><?php echo $rowoo['title'] ?></a></h2></div>
                                <img src="<?php echo $rowoo['images'] ?>"/>
								<div class="content">
									<p><?php
									$text = substr($rowoo['content'],0,500);
                                echo $text;
									?></p>
								</div>
								<div class="extra">
									<div class="info"><?php echo $rowoo['lastdate'] ?></div>
                                    <div class="more"> <a class="button" href="click.php?p=<?php echo $rowoo['id'] ?>">要看 >></a><a><?php echo "已阅读".$rowoo['click']."次" ?></a></div>
									<div class="clear"></div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<div class="row">
                    <?php while ($row = mysql_fetch_array($query)) { ?>
                    <div class="col-1-2">
                    <div class="wrap-col">
                        <article>
                            <div class="heading"><h2 class="title2"><a href="post.php?p=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h2></div>
                            <img src="<?php echo $row['images'] ?>"/>
                            <div class="extra">
                                <div class="info"><?php echo $row['lastdate'] ?></div>
                                <div class="more"><a class="button" href="click.php?p=<?php echo $row['id'] ?>">要看 >></a><a><?php echo "已阅读".$row['click']."次" ?></a></div>
                                <div class="clear"></div>
                            </div>
                        </article>
                    </div>
                </div>
                    <?php } ?>
                </div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h4 class="title">联系我们</h4></div>
						<div class="content">
							<div class="connect">
								<a href="#"><img src="images/socials/facebook-icon.png" title="facebook"/></a><a href="#"><img src="images/socials/google-plus-icon.png" title="google plus"/></a><a href="#"><img src="images/socials/twitter-icon.png" title="twitter" /></a><a href="#"><img src="images/socials/pinterest-icon.png" title="pin"/></a><a href="#"><img src="images/socials/rss-icon.png" title="rss"/></a>
							</div>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">火热文章</h4></div>
						<div class="content">
                            <?php while ($recom = mysql_fetch_array($recommend)) { ?>
							<div class="post">
								<img src="<?php echo $recom['images'] ?>"/>
								<h5 class="title"><a href="click.php?p=<?php echo $recom['id'] ?>"><?php echo $recom['title'] ?></a></h5>
							</div>
                            <?php } ?>
						</div>
					</div>

					<div class="box">
						<div class="heading"><h4 class="title">Random Post</h4></div>
						<div class="content">
							<div class="post">
								<img src="images/img1[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2012</p>
							</div>
							<div class="post">
								<img src="images/img3[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2012</p>
							</div>
							<div class="post last">
								<img src="images/img5[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2012</p>
							</div>
						</div>
					</div>
                    <div class="box">
                        <div class="heading"><h4 class="title">留言板</h4></div>
                        <?php while ($message = mysql_fetch_array($messages)) { ?>
                        <div class="content">
                            <ul>
                                <li><?php echo $message['name'] .":&nbsp;&nbsp;" .$message['content'] ?></li>
                                <li><?php echo $message['lastdate'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Message-Board.php">我要发言>></a></li>
                            </ul>
                        </div>
                        <?php } ?>
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
</body>
</html>