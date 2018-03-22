<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="./jquery-3.2.1/jquery-3.2.1.min.js"></script>
    <style>
        body{
            width: 80%;
            height: 400px;
            padding: 10px;
            /* border: 3px solid yellow; */
            margin-left: 100px;
            margin-top: 20px;
            background-color: rgb(146, 168, 209);
            /* background-color: rgb(247,202,201); */
        }
        .nav_content{
            /* padding-top: ; */
            padding-left: 20%;
        }
        .nav_left{
            width: 100px;
            height: 210px;
            left: 300px;
            /* border:5px solid red; */
            margin-left: 160px;
            float: left;
        }
        .nav_right{
            width: 500px;
            height: 210px;
            right: 100px;
            /* border:5px solid green; */
            margin-right: 160px;
            margin-bottom: 30px;
            float: right;
        }
        .nav_tijiao > input{
            width: 500px;
            height: 30px;
            margin-right: 160px;
            /* border: 1px solid blue; */
            float: right;
            background-color: rgb(195, 223, 226);
            font-size: 18px;
            letter-spacing: 100px;
            color: rgb(153, 18, 10);
            padding-left: 80px;
        }
        div{
            display:inline;
        }
        span{
            /* border: 1px solid bold; */
            border-color: #ccc;
            color: rgb(247,202,201);
            margin: 10px;
            line-height: 130px;
        }
        input{
            width: 495px;
            height: 20px;
            line-height: 30px;
            font-size: 18px;
        }
        textarea{
            font-size: 18px;
        }
        h3{
            color: rgb(153, 18, 10);
        }
    </style>
  </head>
  <body>
    <h3>
      <center>这是一个修改后缀名的页面，多个文件名之间用英文逗号隔开</center><br>
    </h3>
      <div class="nav_content">
        <form id="form" action="./rename.php" method="post">
          <div class="nav_left">
              <span>文件名: </span>
              <span>新后缀名: </span>
          </div>
          <div class="nav_right">
            <textarea id="filenames" name="filenames" placeholder="example: qwe,asd,zxc" rows="6" cols="53"></textarea><br><br><br>
            <input type="text" id="suffix" name="suffix" placeholder="example: data" value="">
          </div>
          <div class="nav_tijiao">
              <input type="submit" value="提交">
          </div>

        </form>
    </div>

    <script type="text/javascript">

        var filenames = $('#filenames');
        var suffix = $('#suffix');
        var form = $('#form');
        form.submit(function(){

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
