<?php
    include "header.php";
?>


<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block">
			<div id="main-content" class="col-2-3">
				<div class="row">
					<div class="col-full">
						<div class="wrap-col">
							<article>
								<div class="heading"><h1 class="title">文章评论</h1></div>
								<div class="contents"></div>
                                <div class="extras">
                                <?php while($row = mysql_fetch_array($query)) { ?>
									<p><?php echo $row['name'] ?></p>
                                    <p><?php echo $row['content'] ?></p>
                                    <p><?php echo $row['lastdate'] ?>
                                        <a href="pass_dope/comment.php?p=<?php echo $row['id'] ?>">&nbsp;&nbsp;通过</a>
                                        &nbsp;&nbsp;<a href="comment_reply.php?p=<?php echo $row['id'] ?>">回复</a>
                                        &nbsp;&nbsp;<a href="del_dope/delete_comment.php?p=<?php echo $row['id'] ?>">删除</a>
                                    </p>
                                    <div class="classone"></div>
                                    <?php } ?>
                                  </div>
                                <div class="box">
                                <div class="heading"><h2 class="title">留言版留言</h2></div>
                                    <div class="contents"></div>
                                    <div class="contentf">
                                    <?php while($rowone = mysql_fetch_array($result)) { ?>
                                    <p><?php echo $rowone['name'] ?></p>
                                    <p><?php echo $rowone['content'] ?></p>
                                    <p><?php echo $rowone['lastdate'] ?>
                                        <a href="pass_dope/message_board.php?p=<?php echo $rowone['id'] ?>">&nbsp;&nbsp;通过</a>
                                        &nbsp;&nbsp;<a href="message_reply.php?p=<?php echo $rowone['id'] ?>">回复</a>
                                        &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $rowone['id'] ?>">删除</a>
                                    </p>
                                    <div class="classone"></div>

                                    <?php } ?>
                                </div>
                                     </div>
                                <div class="box">
                                    <div class="heading"><h2 class="title">留言版回复</h2></div>
                                    <div class="contents"></div>
                                    <div class="contentf">
                                        <?php while($fou = mysql_fetch_array($ff)) { ?>
                                        <p><?php echo $fou['name'] ?></p>
                                        <p><?php echo $fou['content'] ?></p>
                                        <p><?php echo $fou['lastdate'] ?>
                                            <a href="pass_dope/message_reply.php?p=<?php echo $fou['id'] ?>">&nbsp;&nbsp;通过</a>
                                            &nbsp;&nbsp;<a href="message_reply_1.php?p=<?php echo $fou['id'] ?>">回复</a>
                                            &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $fou['id'] ?>">删除</a>
                                        </p>
                                        <div class="classone"></div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="heading"><h2 class="title">文章评论回复</h2></div>
                                    <div class="contents"></div>
                                    <div class="contentf">
                                        <?php while($threef = mysql_fetch_array($three)) { ?>
                                        <p><?php echo $threef['name'] ?></p>
                                        <p><?php echo $threef['content'] ?></p>
                                        <p><?php echo $threef['lastdate'] ?>
                                            <a href="pass_dope/comment_reply.php?p=<?php echo $threef['id'] ?>">&nbsp;&nbsp;通过</a>
                                            &nbsp;&nbsp;<a href="comment_reply_1.php?p=<?php echo $threef['id'] ?>">回复</a>
                                            &nbsp;&nbsp;<a href="del_dope/delete_comment_reply.php?p=<?php echo $threef['id'] ?>">删除</a>
                                        </p>
                                        <div class="classone"></div>
                                        <?php } ?>
                                    </div>
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