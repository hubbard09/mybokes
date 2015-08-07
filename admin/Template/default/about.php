<?php
     include "header.php";
?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block">
            <form id="contact-form" method="post" enctype="multipart/form-data">
			<div id="main-content" class="col-2-3">
				<div class="row">
					<div class="col-full">
						<div class="wrap-col">
							<article>
								<div class="heading"><h2 class="title">Just about me</h2></div>
								<div class="content">
                                    <textarea rows="50" cols="800px"  name="content"><?php echo $row['Life_motto'] ?></textarea>
								</div>
                                <h2 class="ss">This is me</h2>
							</article>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
                <div class="postas">
				<div class="wrap-col">
						<div class="heading"><h4 class="title">资料</h4></div>
						<div class="content">
							<div class="post">
								<p>
                                    <p><label><input class="inputs" name="net_name" value="<?php echo $row['net_name'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="admin_name" value="<?php echo  $row['admin_name'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="origin" value="<?php echo $row['origin'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="Live" value="<?php echo  $row['Live'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="Occupation" value="<?php echo $row['Occupation'] ?>" /></label></p>
                                    <p> <label><input class="inputs" name="Interest" value="<?php echo  $row['Interest'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="Book" value="<?php echo $row['Book'] ?>" /></label></p>
                                    <p><label><input class="inputs" name="Music" value="<?php echo $row['Music'] ?>" /></label></p>
                                </p>

                                </div>
						</div>
                    </div>


					<div class="box">
                        <label><input type="file" class="inputs" name="upfile" style="width: 200px" /><?php echo "原始路径：.{$row['photo']}" ?></label>
				</div>
                </div>
			</div>
                <div class="buttons">
                    <INPUT class="inpute" TYPE="submit" name="submit" value="修改" />
                </div>
                </form>
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