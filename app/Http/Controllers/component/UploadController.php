<?php

namespace App\Http\Controllers\component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function upload(Request $request){
        $storage_path = 'upload/'.date('Ymd');
        $real_path = $request->file('img')->store($storage_path);
    }
}
