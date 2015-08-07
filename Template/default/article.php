<?php
include 'header.php';
?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block">
			<div id="main-content" class="col-2-3">
				<div class="rows">
					<div class="col-full">
						<div class="wrap-col">
							<article>
								<div class="heading"><h1 class="title">精彩文章</h1></div>
                                <?php while ($tops = mysql_fetch_array($top)) {
                                ?>
                                <div class="contents">
                                    <div class="yk">
                                        <div class="contents">
                                            <div class="yk">  <p><a href="click.php?p=<?php echo $tops['id'] ?>"><?php echo $tops['title'] ?></a>&nbsp;&nbsp;&nbsp;*置顶文章*<a class="aa" href="click.php?p=<?php echo $tops['id'] ?>">要看>></a><a class="aa"><?php echo "已阅读".$tops['click']."次" ?></a> </p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="extras">
                                    <p><?php  $text = substr($tops['content'],0,100);
                    echo $text; echo "&nbsp;&nbsp;&nbsp;&nbsp;发布人_" .$tops['user'] ."&nbsp;&nbsp;发布时间_" .$tops['lastdate']; ?></p>
                                </div>
                                <hr width=100% size=1 color=#c2c2c2 style="border:3 double green">
                                <?php } ?>
                              <?php while ($rowp =mysql_fetch_array($result)) { ?>
                                <div class="contents">
                                    <div class="yk">  <p><a href="click.php?p=<?php echo $rowp['id'] ?>"><?php echo $rowp['title'] ?></a><a class="aa" href="click.php?p=<?php echo $rowp['id'] ?>">要看>></a><a class="aa"><?php echo "已阅读".$rowp['click']."次" ?></a> </p></div>
                                </div>
                                <div class="extras">
                                    <p>
                                        <?php  $text = substr($rowp['content'],0,100);
                                        echo $text; echo "&nbsp;&nbsp;&nbsp;&nbsp;发布人_" .$rowp['user'] ."&nbsp;&nbsp;发布时间_" .$rowp['lastdate'];
                                    ?>
                                   </p>
                                </div>
                                <hr width=100% size=1 color=#c2c2c2 style="border:3 double green">
                                <?php } ?>
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