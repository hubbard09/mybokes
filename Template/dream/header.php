<header>
    <div class="login"><a href="../../admin/index.php"> <?php if(isset($_SESSION['username'])) {
                echo $_SESSION['username'].'<a class="over" href="loadover_a.php">注销</a>'; } else {
            ?>
        </a></div>
    <div class="login"><a href="login.php"><?php echo "登录"; } ?></a> </div>
    <div class="logins"> <a href="admin/login.php">管理员登录</a></div>
    <div id="logo"><a href="#"></a></div>
    <nav class="topnav" id="topnav"><a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="article.php"><span>精彩文章</span><span class="en">Article</span></a><a href="Message-Board.php"><span>留言版</span><span class="en">Gustbook</span></a><a href="about-me.php"><span>关于我</span><span class="en">About</span></a></nav>
    </nav>
</header>