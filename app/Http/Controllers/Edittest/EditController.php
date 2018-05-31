<?php

namespace App\Http\Controllers\Edittest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
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

    public function showarticle(){
        $article = Article::findOrFail(1);
        return $article;
    }

    public function storearticle(Request $request){
        $this->validate($request, [
            'title' => 'required|max:50',
            'summary' => 'required|max:50',
            'img' => 'required'
        ]);
        $title = $request->title;
        $summary = $request->summary;
        $img = $request->img;
        $content = $request->content;
        Article::create(['title'=>$title,'summary'=>$summary, 'img'=>$img, 'content'=>$content]);
        return redirect('edit');
        
    }
}
