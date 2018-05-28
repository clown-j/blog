<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>请输入文章内容</title>
</head>
<body>
    {{-- <form action="/upload" method="post" enctype="multipart/form-data"> 
    {{ csrf_field() }}
    <input type="file" name="file_name">
    <input type="submit" value="上传">
    </form> --}}


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
        editor.customConfig.uploadImgServer = '/upload';
        editor.customConfig.uploadFileName = "file_name";
        editor.create()
    </script>

</body>
</html>