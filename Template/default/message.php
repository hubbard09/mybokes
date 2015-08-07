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
								<div class="heading"><h1 class="title">留言版</h1></div>
								<div class="contents">
									<p>被赞的留言</p>
								</div>
                                <div class="extras">
                                <?php while($row = mysql_fetch_array($query)) {
                                if($row['audit'] == 'T') { ?>
									<p><?php echo $row['name'] ?></p>
                                    <p><?php echo $row['content'] ?></p>
                                    <p><?php echo $row['lastdate'] ?>&nbsp;&nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $row['id'] ?>">赞一个<?php echo'('.$row['Praise'].')'?></a>&nbsp;&nbsp;</a><a href="message_reply.php?p=<?php echo $row['id'] ?>">回复</a>
                                    </p>
                                    <div class="classone"></div>
                                    <?php
                                    $sql = "select * from message_board_reply where messageid = {$row['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yd = mysql_fetch_array($queryone)) {
                                    if($yd['audit'] == 'T') {
                                 ?>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yd['content'] ?></p>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yd['lastdate'] ?><a href="message_reply_1.php?p=<?php echo $yd['id'] ?>">&nbsp;&nbsp;回复</a></p>
                                    <div class="classone"></div>
                                <?php
                                      }
                                    }
                                  }
                              }
                                ?>
                                </div>

                                <div class="box">
                                <div class="heading"><h4 class="title">最新爪子</h4></div>
                                    <div class="contentf">
                                    <?php while($rowone = mysql_fetch_array($result)) {
                                    if($rowone['audit'] == 'T') { ?>
                                    <p><?php echo $rowone['name'] ?></p>
                                    <p><?php echo $rowone['content'] ?></p>
                                    <p><?php echo $rowone['lastdate'] ?>&nbsp;&nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $rowone['id'] ?>">赞一个<?php echo '('.$rowone['Praise'].')'?></a>&nbsp;&nbsp;</a><a href="message_reply.php?p=<?php echo $rowone['id'] ?>">回复</a>
                                    </p>
                                    <div class="classone"></div>
                                    <?php
                                    $sql = "select * from message_board_reply where messageid = {$rowone['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yh = mysql_fetch_array($queryone)) {
                                     if($yh['audit'] == 'T') {
                                 ?>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['content'] ?></p>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['lastdate'] ?>&nbsp;&nbsp;<a href="message_reply_1.php?p=<?php echo $rowone['id'] ?>">回复</a></p>
                                    <div class="classone"></div>
                                    <?php
                                       }
                                      }
                                   }
                                 }
                                     ?>
                                        <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
                                </div>
                                     </div>
								<div id="comment">
									<h3>留下爪子</h3>
									<form id="contact-form" method="post">
									    <fieldset>
									        <label>
                                                <?php
                                                if(isset($_SESSION['username']) == "") {
                                                $_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
                                                echo "请登录您的帐号。";
                                                } else {
                                                  echo $_SESSION['username'];
                                                }
                                          ?>
                                            </label>
									        <textarea name="content" onBlur="if(this.value=='') this.value='content'" onFocus="if(this.value =='content' ) this.value=''">content</textarea>
									        <div class="buttons">
                                                <INPUT TYPE="submit" name="submit" value="提交评论" />
									        </div>
									    </fieldset>           
									</form>
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
								<a href="#"><img src="images/socials/facebook-icon.png" title="facebook"/></a><a href="#"><img src="images/socials/google-plus-icon.png" title="google plus"/></a><a href="#"><img src="images/socials/twitter-icon.png" title="twitter" /></a><a href="#"><img src="images/socials/pinterest-icon.png" title="pin"/></a><a href="#"><img src="images/socials/rss-icon.png" title="rss"/></a>
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
                        <div class="heading"><img src="images/8.jpg"> </div>
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