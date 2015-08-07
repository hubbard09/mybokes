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
                                <form id="contact-form" method="post" enctype="multipart/form-data">
                                    <label><input class="inputs" name="title" value="<?php echo $edit['title'] ?>" /></label>
                                    <label><input type="file" class="inputs" name="upfile" style="width: 200px" /><?php echo "原始路径：.{$edit['images']}" ?></label>
                                    <textarea rows="50" cols="800px" class="inputr" name="content"><?php echo $edit['content'] ?></textarea>
                                    <div class="info">  <label><input class="inputs" name="lastdate" value="<?php echo '最后编辑时间为'. $edit['lastdate'] ?>" /></label></div>
                                        <div class="info">  <label><input class="inputs" name="name" value="<?php echo $edit['user'] ?>" /></label></div>
                                    <div class="buttons">
                                    <INPUT class="inpute" TYPE="submit" name="submit" value="修改" />
                                </div>
                                <div class="box">
                                <div class="heading"><h4 class="title">评论文章</h4></div>
                                    <div class="content">
                                    <?php while($post = mysql_fetch_array($results)) { ?>
                                        <p><?php echo $post['name'] ?></p>
                                        <h5 class="title"><a href="#"><?php echo $post['content'] ?></a></h5>
                                        <p><?php echo $post['lastdate'] ?>&nbsp;&nbsp;
                                            <?php if($post['audit'] == 'F') { ?>
                                            <a href="comment_audit.php?p=<?php echo $post['id'] ?>">通过</a>
                                            <?php  }  else {  ?>
                                            <a href="comment_audit_not.php?p=<?php echo $post['id'] ?>">不通过</a>
                                            <?php  } ?>
                                            &nbsp;&nbsp;<a href="comment_reply.php?p=<?php echo $post['id'] ?>">回复</a>
                                            &nbsp;&nbsp;<a href="editorial_comment.php?p=<?php echo $post['id'] ?>">编辑</a>
                                            &nbsp;&nbsp;<a href="delete_comment.php?p=<?php echo $post['id'] ?>">删除</a>
                                        </p>
                                    <div class="classone"></div>
                                    <?php
                                    $sql = "select * from admin_reply where messageid = {$post['id']}";
                                    $queryone = mysql_query($sql);
                                    while($yh = mysql_fetch_array($queryone)) {
                                 ?>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['content'] ?></p>
                                    <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;'.$yh['lastdate'] ?>
                                        <?php if($yh['audit'] == 'F') { ?>
                                        <a href="comment_audit_reply.php?p=<?php echo $yh['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;通过</a>
                                        <?php  }  else {  ?>
                                        <a href="comment_audit_not_reply.php?p=<?php echo $yh['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;不通过</a>
                                        <?php  } ?>
                                    </p>

                                    <div class="classone">

                                    </div>

                                    <?php
                                     }
                                 }
                                    ?>
                                        <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
                                </div>
                            </div>
									    </fieldset>

                                </form>
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
						<div class="heading"><h4 class="title">Popular Post</h4></div>
						<div class="content">
                            <?php while($rec = mysql_fetch_array($recommend)) { ?>
							<div class="post">
								<img src="<?php echo '../'. $rec['images'] ?>"/>
								<h5 class="title"><a href="post.php?p=<?php echo $rec['id'] ?>"><?php echo $rec['title'] ?></a></h5>
							</div>
                            <?php } ?>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">Categories</h4></div>
						<div class="content">
							<ul>
								<li><a href="http://sc.chinaz.com">Free Html5 Templates</a></li>
								<li><a href="http://sc.chinaz.com">Free Responsive Themes</a></li>
								<li><a href="http://sc.chinaz.com">Free Html5 and Css3 Themes</a></li>
								<li><a href="http://sc.chinaz.com">Free Responsive Html5 and Css3 Themes</a></li>
								<li><a href="http://sc.chinaz.com">Free Basic Responsive Html5 Css3 Layouts</a></li>
								<li class="last"><a href="http://sc.chinaz.com">Premium Responsive Html5 Css3 Templates</a></li>
							</ul>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h4 class="title">Random Post</h4></div>
						<div class="content">
							<div class="post">
                                <img src="../images/img1[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2014</p>
							</div>
							<div class="post">
								<img src="../images/img3[thumb].jpg"/>
								<h5 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
								<p>November 11 ,2014</p>
							</div>
							<div class="post last">
								<img src="../images/img5[thumb].jpg"/>
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