<?php
    include "header.php";
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
                                <div class="st">
								<div class="heading"><h1 class="title">管理隐藏文章</h1></div>
                                </div>
                              <?php while ($rowp =mysql_fetch_array($result)) {
                                ?>
                                <div class="contents">
                                    <div class="yk">
                                        <p>
                                            <?php echo $rowp['title'] ?>
                                           <a class="aa" href="hide_yes.php?p=<?php echo $rowp['id'] ?>">显示</a>
                                         </p>
                                    </div>
                                </div>
                                <div class="extras">
                                    <p><?php  $text = substr($rowp['content'],0,100);
                    echo $text; echo "&nbsp;&nbsp;&nbsp;&nbsp;发布人_" .$rowp['user'] ."&nbsp;&nbsp;发布时间_" .$rowp['lastdate']; ?></p>
                                </div>
                                <hr width=100% size=1 color=#c2c2c2 style="border:3 double green">
                                <?php } ?>
                               <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
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