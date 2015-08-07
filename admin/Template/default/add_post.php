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
                                <form id="contact-form" method="post" action="" enctype="multipart/form-data">
                                    <label><input class="inputs" name="title" value="请填写你的标题"/></label>
                                    <label><input type="file"  name="upfile" /></label>
                                    <textarea rows="50" cols="800px" class="inputr" name="content" value="请填写你的文章" /></textarea>
                                        <div class="info">  <label><input class="inputs" name="name" value="<?php echo $_SESSION['username']; ?>"/></label></div>
                                    <div class="buttons">
                                    <INPUT class="inpute" TYPE="submit" name="submit" value="添加文章" />
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