<?php

namespace App\Http\Controllers\component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function wangUpload(Request $request){
        $storage_path = 'upload/'.date('Ymd');
        $real_path = $request->file('wangImg')->store($storage_path);
        return array("errno"=>0, "data"=>array($real_path));
    }
}
