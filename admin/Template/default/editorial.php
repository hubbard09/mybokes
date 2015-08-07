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
                                <form id="contact-form" method="post">
                                    <label><input class="inputs" name="name" value="<?php echo $row['name'] ?>" /></label>
                                    <textarea rows="50" cols="80px" class="inputr" name="content"><?php echo $row['content'] ?></textarea>
                                    <div class="info">  <label><input class="inputs" name="lastdate" value="<?php echo '最后编辑时间为'. $row['lastdate'] ?>" /></label></div>
                                    <div class="buttons">
                                    <INPUT class="inpute" TYPE="submit" name="submit" value="修改" />
                                </div>
									    </fieldset>

                                </form>
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