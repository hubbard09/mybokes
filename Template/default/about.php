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
								<div class="heading"><h2 class="title">Just about me</h2></div>
								<div class="content">
									<?php echo $row['Life_motto'] ?>
								</div>
                                <h2 class="ss">This is me</h2>
							</article>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-col">
						<div class="heading"><h4 class="title">资料</h4></div>
						<div class="content">
							<div class="post">
								<img src="">
								<p>
                                    <p><?php echo $row['net_name'] ?></p>
                                    <p> <?php echo $row['admin_name'] ?></p>
                                    <p><?php echo $row['origin'] ?></p>
                                    <p><?php echo $row['Live'] ?></p>
                                    <p><?php echo $row['Occupation'] ?></p>
                                    <p> <?php echo $row['Interest'] ?></p>
                                    <p><?php echo $row['Book'] ?></p>
                                    <p><?php echo $row['Music'] ?></p>
                                </p>
                            </div>
						</div>
				</div>
					<div class="box">
						<div class="heading"><img src="<?php echo $row['photo'] ?>"> </div>
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
</body>
</html>