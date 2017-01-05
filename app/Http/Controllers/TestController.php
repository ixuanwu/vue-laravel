<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        $stu[]     = [
            'id'=>23232,
            'name'=>'蒋和超',
            'grade'=>'2011级',
            'major'=>'网络工程',
        ];
        $stu[]     = [
            'id'=>23234,
            'name'=>'蒋和超',
            'grade'=>'2011级',
            'major'=>'网络工程',
        ];
        $stu[]     = [
            'id'=>23236,
            'name'=>'蒋和超',
            'grade'=>'2011级',
            'major'=>'网络工程',
        ];
        $stu[]     = [
            'id'=>23237,
            'name'=>'蒋和超',
            'grade'=>'2011级',
            'major'=>'网络工程',
        ];
        $teacher[] = [
            'id'=>12323,
            'name'=>'费立国',
            'age'=>'10',
            'time'=>time(),
            'stu' =>$stu,
        ];
        $teacher[] = [
            'id'=>12324,
            'name'=>'费立国',
            'age'=>'10',
            'time'=>time(),
            'stu' =>$stu,
        ];
        $teacher[] = [
            'id'=>12325,
            'name'=>'费立国',
            'age'=>'10',
            'time'=>time(),
            'stu' =>$stu,
        ];
        sleep(1);
        return $teacher;
    }

    public function test(){
        return view('test');
    }


}
