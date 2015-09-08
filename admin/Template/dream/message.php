
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
         <p><?php echo $row['name'] ?></p>
         <p><?php echo $row['content'] ?></p>
              <p><?php echo $row['lastdate'] ?>
              <?php if($row['audit'] == 'F') { ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit.php?p=<?php echo $row['id'] ?>">通过</a>
              <?php  }  else {  ?>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit_not.php?p=<?php echo $row['id'] ?>">不通过</a>
              <?php  } ?>
              &nbsp;&nbsp; &nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $row['id'] ?>">赞一个<?php echo'('.$row['Praise'].')'?>
                  &nbsp;&nbsp; &nbsp;&nbsp;</a><a href="message_reply.php?p=<?php echo $row['id'] ?>">回复</a>
              &nbsp;&nbsp; &nbsp;&nbsp;<a href="editorial_message.php?p=<?php echo $row['id'] ?>">编辑</a>
              &nbsp;&nbsp; &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $row['id'] ?>">删除</a></p>
         <?php
         $sql = "select * from message_board_reply where messageid = {$row['id']}";
         $queryone = mysql_query($sql);
         while($yd = mysql_fetch_array($queryone)) {
                 ?>
                 <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yd['content'] ?></p>
                 <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $yd['lastdate'] ?>
                 <?php if($yd['audit'] == 'F') { ?>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit_reply.php?p=<?php echo $yd['id'] ?>">通过</a>
                 <?php  }  else {  ?>
                     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit_not_reply.php?p=<?php echo $yd['id'] ?>">不通过</a>
                 <?php  } ?>
                     &nbsp;&nbsp; &nbsp;&nbsp;</a><a href="message_reply_1.php?p=<?php echo $yd['id'] ?>">回复</a>
                 &nbsp;&nbsp; &nbsp;&nbsp;<a href="editorial_message_1.php?p=<?php echo $yd['id'] ?>">编辑</a>
                 &nbsp;&nbsp; &nbsp;&nbsp;<a href="del_dope/delete_message_reply.php?p=<?php echo $yd['id'] ?>">删除</a>
                 </p>
             <?php } ?>
      </div>
      <span class="dateview"><?php echo $row['lastdate'] ?></span>
    </ul>
      <?php


      }
      ?>
  </div>
    <div class="cl"> <h1>最新留言</h1></div>
    <div class="bloglist">
        <?php  while($rowo = mysql_fetch_array($result)) { ?>
            <ul class="arrow_box">
            <div class="sy">
                <p><?php echo $rowo['name'] ?></p>
                <p><?php echo $rowo['content'] ?></p>
                <p><?php echo $rowo['lastdate'] ?>
                    <?php if($rowo['audit'] == 'F') {?>
                    <?php echo $rowo['id'] ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="pass" href="message_audit.php?number=<?php echo $rowo['id'] ?>" >通过</a>


                    <?php  }  else {  ?>
                        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a class="not-pass" href="message_audit_not.php?p=<?php echo $rowo['id'] ?>">不通过</a>
                    <?php  } ?>
                    &nbsp;&nbsp; &nbsp;&nbsp;<a href="message-praise.php?p=<?php echo $rowo['id'] ?>">赞一个<?php echo'('.$rowo['Praise'].')'?></a>
                        &nbsp;&nbsp; &nbsp;&nbsp;<a href="message_reply.php?p=<?php echo $rowo['id'] ?>">回复</a>
                    &nbsp;&nbsp; &nbsp;&nbsp;<a href="editorial_message.php?p=<?php echo $rowo['id'] ?>">编辑</a>
                    &nbsp;&nbsp; &nbsp;&nbsp;<a href="del_dope/delete_message_board.php?p=<?php echo $rowo['id'] ?>">删除</a></p>
                <?php
                $sql = "select * from message_board_reply where messageid = {$rowo['id']}";
                $queryone = mysql_query($sql);
                while($ydo = mysql_fetch_array($queryone)) {
                    if ($ydo['audit'] == 'T') {
                        ?>
                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $ydo['content'] ?></p>
                        <p><?php echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $ydo['lastdate'] ?>
                                <?php if($ydo['audit'] == 'F') { ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit_reply.php?p=<?php echo $ydo['id'] ?>">通过</a>
                                <?php  }  else {  ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="message_audit_not_reply.php?p=<?php echo $ydo['id'] ?>">不通过</a>
                                <?php  } ?>
                                &nbsp;&nbsp; &nbsp;&nbsp;<a href="message_reply_1.php?p=<?php echo $ydo['id'] ?>">回复</a>
                            &nbsp;&nbsp; &nbsp;&nbsp;<a href="editorial_message_1.php?p=<?php echo $ydo['id'] ?>">编辑</a>
                            &nbsp;&nbsp; &nbsp;&nbsp;<a href="del_dope/delete_message_reply.php?p=<?php echo $ydo['id'] ?>">删除</a>
                        </p>

                    <?php
                    }
                }
                ?>
                </div>
                <span class="dateview"><?php echo $rowo['lastdate'] ?></span>
                </ul>
            <?php } ?>
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
                    <textarea name="content" onBlur="if(this.value=='') this.value='content'" onFocus="if(this.value =='content' ) this.value=''">花千骨</textarea>
                    <div class="buttons">
                        <INPUT TYPE="submit" name="submit" value="搜索" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
  </div>


<?php
    include "footer.php";
?>

</body>
<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script type="text/javascript">

    jQuery(".pass").click(function () {
        var link = $(this).data('link');
        $(this).parent().find('.not-pass').html(link);
        $(this).html('通过');
        $.get(link, function (data, status) {
            if (status == "success") {
                alert("通过");
                $(this).parent().find('.not-pass').html(link);
            }
        });
    });
    jQuery(".not-pass").click(function () {
        var link = $(this).data('link');
        $(this).parent().find('.pass').html(link);
        $(this).html('不通过');
        $.get(link, function (data, status) {
            if (status == "success") {
                alert("不通过");
                $(this).parent().find('.pass').html(link);
            }
        });
    });

</script>

