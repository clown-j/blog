<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>请输入文章内容</title>
</head>
<body>
    {{--  <form action="/upload-img" mepthod="post" enctype="multipart/form-data"> 
    {{ csrf_field() }}
    <input type="file" name="file_name">
    <input type="submit" value="上传">
    </form>  --}}

    <h1 style="text-align:center">文章输入页面</h1>
    
    <form action="/article" method="POST">
        {{ csrf_field() }}
        标题： <input type="text" name="title" placeholder="请输入文章标题">
        <br>
        <br>
        描述：<input type="text" name="summary" placeholder="请输入描述">
        <br>
        <br>
        <input type="submit" value="提交">
    </form>
    <div id="editText">
        <p>欢迎使用wangEditor富文本编辑器</p>
    </div>
    <script type="text/javascript" src="js/vendor/wangEditor/wangEditor.min.js"></script>
    <script type="text/javascript">
        var E = window.wangEditor;
        var editor = new E('#editText');

        {{-- 定义token字段 --}}
        editor.customConfig.uploadImgParams = {
            _token: '{{ csrf_token() }}',
        }
        editor.customConfig.uploadImgServer = '/upload-img';
        editor.customConfig.uploadFileName = "file_name";
        editor.create()
    </script>

</body>
</html>