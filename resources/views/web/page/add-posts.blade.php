{{--  文章添加页  --}}
@extends('web.master')
@section('title')
文章录入
@endsection
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <h3 class="page-title">录入文章</h3>
        <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">文章内容</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">文章标题：</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">描述：</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">文章内容：</label>
                        <div id="editText">
                            <p>请录入内容！</p>
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
                    
                            document.getElementById('btn1').addEventListener('click', function (){
                                // 获取富文本框的值，复制给隐藏的输入框
                                document.getElementById('content').value = editor.txt.html();
                                // 表单提交。
                                document.getElementById('postlal').submit();
                            })
                        </script>        
                    </div>
                        
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">添加文章</button>
                        <button type="button" class="btn btn-danger">重置表单</button>
                    </div>

                    <select class="form-control input-lg">
                        <option value="cheese">Cheese</option>
                        <option value="tomatoes">Tomatoes</option>
                        <option value="mozarella">Mozzarella</option>
                        <option value="mushrooms">Mushrooms</option>
                        <option value="pepperoni">Pepperoni</option>
                        <option value="onions">Onions</option>
                    </select>
                    <br>
                    <select class="form-control">
                        <option value="cheese">Cheese</option>
                        <option value="tomatoes">Tomatoes</option>
                        <option value="mozarella">Mozzarella</option>
                        <option value="mushrooms">Mushrooms</option>
                        <option value="pepperoni">Pepperoni</option>
                        <option value="onions">Onions</option>
                    </select>
                    <br>
                    <select class="form-control input-sm">
                        <option value="cheese">Cheese</option>
                        <option value="tomatoes">Tomatoes</option>
                        <option value="mozarella">Mozzarella</option>
                        <option value="mushrooms">Mushrooms</option>
                        <option value="pepperoni">Pepperoni</option>
                        <option value="onions">Onions</option>
                    </select>
                </div>
        </div>    
    </div>
</div>
@endsection