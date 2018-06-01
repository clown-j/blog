<?php

namespace App\Http\Controllers\vo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    // 文章列表
    public function index(){

    }

    // 创建文章
    public function create(){

    }

    // 存储文章
    public function store(Request $request){
        dd($request->select);
    }

    // 查看文章
    public function show(){

    }

    // 编辑文章
    public function edit(){

    }

    // 修改文章
    public function update(){

    }

    // 删除文章
    public function destroy(){

    }
}
