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