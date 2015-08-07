
<head>
    <?php
    include "head.php";
    ?>
    <link href="Template/dream/css/base.css" rel="stylesheet">
<link href="Template/dream/css/mood.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php
include "header.php";
?>
<div class="moodlist">
  <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="index.php" class="n1">网站首页</a><a href="#" class="n2">留言版</a></h1>
    <div class="cl"> <h1>被赞留言</h1></div>
  <div class="bloglist">
      <?php  while($row = mysql_fetch_array($query)) { ?>
    <ul class="arrow_box">
     <div class="sy">
        <?php if($row['audit'] == 'T') { ?>
         <p><?php echo $row['name'] ?></p>
         <p><?php echo $row['content'] ?></p>
         <?php
         $sql = "select * from message_board_reply where messageid = {$row['id']}";
         $queryone = mysql_query($sql);
         while($yd = mysql_fetch_array($queryone)) {
             if ($yd['audit'] == 'T') {
                 ?>
                 <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yd['content'] ?></p>
                 <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yd['lastdate'] ?>
                     <a href="message_reply_1.php?p=<?php echo $yd['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;回复</a></p>
             <?php
             }
         }
              ?>
      </div>
      <span class="dateview"><?php echo $row['lastdate'] ?></span>
    </ul>
      <?php

      }
      }
      ?>
  </div>
    <div class="cl"> <h1>最新留言</h1></div>
    <div class="bloglist">
        <?php  while($rowo = mysql_fetch_array($result)) { ?>
            <ul class="arrow_box">
            <div class="sy">
            <?php if($rowo['audit'] == 'T') { ?>
                <p><?php echo $rowo['name'] ?></p>
                <p><?php echo $rowo['content'] ?><a href="message_reply.php?p=<?php echo $rowo['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;回复</a></p>
                <?php
                $sql = "select * from message_board_reply where messageid = {$rowo['id']}";
                $queryone = mysql_query($sql);
                while($ydo = mysql_fetch_array($queryone)) {
                    if ($ydo['audit'] == 'T') {
                        ?>
                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $ydo['content'] ?></p>
                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $ydo['lastdate'] ?>
                            <a href="message_reply_1.php?p=<?php echo $ydo['id'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;回复</a></p>

                    <?php
                    }
                }
                ?>
                </div>
                <span class="dateview"><?php echo $rowo['lastdate'] ?></span>
                </ul>
            <?php

            }
        }
        ?>
        <div class="ss"><?php echo "总共有".$page_count."页|"."第".$page_num."页|" .$page_string; ?></div>
        <div id="comment">
            <h1>留下爪子</h1>
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
    </div>
  </div>


<?php
    include "footer.php";
?>
<script src="js/silder.js"></script>
</body>
