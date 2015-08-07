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
                                <div class="heading"><h2 class="title"><?php echo $rowone['title'] ?></h2></div>
                                <img src="<?php echo $rowone['images'] ?>">
                                <div class="content">
                                    <?php echo $rowone['content'] ?>
                                </div>
                                <div class="extra">
                                   <?php echo "发布时间_" .$rowone['lastdate']."&nbsp;&nbsp;&nbsp;". "发布人_" .$rowone['user']?>
                                </div>
                                <div class="reads"></div>
                                <div class="read">
                                    <a class="readsh" href="post.php?p=<?php echo $readsh['id'] ?>"><?php if($readsh['id'] != "") { echo "<<".$readsh['title']; } ?></a>
                                    <a class="readxia" href="post.php?p=<?php echo $readxia['id'] ?>"><?php if($readxia['id'] != "") { echo $readxia['title'].">>"; } ?></a>
                                </div>
                                <div class="readss"></div>
                                <div class="box">
                                    <div class="heading"><h4 class="title">最新评论</h4></div>
                                    <div class="contentf">
                                    <?php while($rowtwo = mysql_fetch_array($result)) {
                                    if($rowtwo['audit'] == 'T') { ?>
                                        <p><?php echo $rowtwo['name'] ?></p>
                                        <p><?php echo $rowtwo['content'] ?></p>
                                        <p><?php echo $rowtwo['lastdate'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="comment_reply.php?p=<?php echo $rowtwo['id'] ?>">说一句</a>
                                        </p>
                                        <div class="classone"></div>
                                        <?php
                                    $sql = "select * from admin_reply where messageid = {$rowtwo['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yh = mysql_fetch_array($queryone)) {
                                    if($yh['audit'] == 'T') {
                                 ?>
                                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['content'] ?></p>
                                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['lastdate'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="comment_reply_1.php?p=<?php echo $yh['id'] ?>">说一句</a></p>
                                        <div class="classone"></div>
                                    <?php
                                    }
                                      }
                                     }
                                 }
                                      ?>
                                    </div>
                                    <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
                                </div>
                                <div id="comment">
                                    <h3>评论</h3>

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
						<div class="heading"><h4 class="title">Popular Post</h4></div>
						<div class="content">
                            <?php while($rec = mysql_fetch_array($recommend)) { ?>
							<div class="post">
								<img src="<?php echo $rec['images'] ?>"/>
								<h5 class="title"><a href="click.php?p=<?php echo $rec['id'] ?>"><?php echo $rec['title'] ?></a></h5>
							</div>
                            <?php } ?>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">Categories</h4></div>
						<div class="content">
							<ul>
								<li><a href="#">Free Html5 Templates</a></li>
								<li><a href="#">Free Responsive Themes</a></li>
								<li><a href="#">Free Html5 and Css3 Themes</a></li>
								<li><a href="#">Free Responsive Html5 and Css3 Themes</a></li>
								<li><a href="#">Free Basic Responsive Html5 Css3 Layouts</a></li>
								<li class="last"><a href="#">Premium Responsive Html5 Css3 Templates</a></li>
							</ul>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">Random Post</h4></div>
						<div class="content">
							<div class="post">
                                <img src="images/img1[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2014</p>
							</div>
							<div class="post">
								<img src="images/img3[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2014</p>
							</div>
							<div class="post last">
								<img src="images/img5[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2014</p>
							</div>
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