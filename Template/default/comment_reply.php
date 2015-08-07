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
                                    <label>
                                        <div class="sc">
                                        <p><?php echo $onef['name'] ?></p>
                                        <p><?php echo $onef['content'] ?></p>
                                        <p><?php echo $onef['lastdate'] ?></p>
                                        </div>
                                    </label>
                                    <textarea rows="50" cols="800px" class="inputr" name="content"/><?php echo $_SESSION['username'] .'&nbsp;&nbsp;'.'回复&nbsp;&nbsp;'.$onef['name'].'&nbsp;&nbsp;：'; ?></textarea>
                                        <div class="info">  <label><input class="inputs" name="name" value="<?php echo $_SESSION['username']; ?>"/></label></div>
                                    <div class="buttons">
                                    <INPUT class="inpute" TYPE="submit" name="submit" value="回复留言" />
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