<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="/public/jquery-3.2.1/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/index.css">
  </head>
  <body>
    <div class="nav_body">
        <h3>
        <center>这是一个修改后缀名的页面，多个文件名之间用英文逗号隔开</center><br>
        </h3>
        <div class="nav_content">
            <form id="form" action="" method="post">
                <div class="nav_left">
                    <span>文件名: </span>
                    <span>新后缀名: </span>
                </div>
                <div class="nav_right">
                    <!-- <textarea id="filenames" name="filenames" placeholder="example: qwe,asd,zxc" rows="7" cols="40"></textarea><br><br><br> -->
                    <input type="file" multiple="multiple" />
                    <input type="text" id="suffix" name="suffix" placeholder="example: data" value="">
                </div>
                <div class="nav_tijiao">
                    <!-- <input type="submit" value="提交"> -->
                    <button id="submit">提交</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <script type="text/javascript" src="./public/js/index.js"></script> -->
    <script>
        var filenames = $('#filenames');
        var suffix = $('#suffix');
        var form = $('#submit');
        form.click(function(){

            if (filenames.val() == '') {
                alert('文件名不能为空');
                filenames.focus();
                return false;
            } else if(suffix.val() == '') {
                alert('后缀名不能为空');
                suffix.focus();
                return false;
            }

        });

    </script>
  </body>
</html>
