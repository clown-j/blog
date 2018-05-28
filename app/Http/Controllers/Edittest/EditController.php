<?php

namespace App\Http\Controllers\Edittest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function editui(){
        return view('edittest.index');
    }

    public function upload(Request $request){
        // 定义文件上传路径
        $file_path = 'upload/'.date('Ymd');
        // 上传文件，并返回文件上传后的全路径
        $file_abspath = $request->file('file_name')->store($file_path);
        // 返回成功
        return array("errno"=>0, "data"=>array($file_abspath));
    }
}
