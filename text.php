
<?php
//print_r($_FILES["upfile"]); 
if(is_uploaded_file($_FILES['upfile']['tmp_name'])){
    $upfile=$_FILES["upfile"];
//获取数组里面的值
    $time = time();
    $name=$upfile["name"];//上传文件的文件名
    $name = $time.".jpg";
    $type=$upfile["type"];//上传文件的类型
    $size=$upfile["size"];//上传文件的大小
    $tmp_name=$upfile["tmp_name"];//上传文件的临时存放路径
//判断是否为图片 
    switch ($type){
        case 'image/pjpeg':$okType=true;
            break;
        case 'image/jpeg':$okType=true;
            break;
        case 'image/gif':$okType=true;
            break;
        case 'image/png':$okType=true;
            break;
    }

    if($okType){
        /**
         * 0:文件上传成功<br/>
         * 1：超过了文件大小，在php.ini文件中设置<br/>
         * 2：超过了文件的大小MAX_FILE_SIZE选项指定的值<br/>
         * 3：文件只有部分被上传<br/>
         * 4：没有文件被上传<br/>
         * 5：上传文件大小为0
         */

//把上传的临时文件移动到up目录下面 
        $path = '../images/';
        if(!file_exists($path))
        {
//检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir("$path", 0700);
        }//END IF
        move_uploaded_file( $tmp_name,'../images/'.$name);
        $destination="images/".$name;
    }else{
        echo "请上传jpg,gif,png等格式的图片！";
    }
}
?> 