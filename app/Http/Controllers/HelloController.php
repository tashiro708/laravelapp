<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request) {
        $date = ['msg'=>'これはコントローラから渡されたメッセージです。' , 'id'=>$request->id];
        return view ('hello.index' , $date);
    }

    // public function index($id='zero') {
    //     $date = ['msg'=>'これはコントローラから渡されたメッセージです。' , 'id' => $id];p64パラメーターをテンプレートに渡す
    //     return view ('hello.index' , $date);
    // }
    // public function index() {
    //     return view ('hello.index');
    // }
    // public function index(Request $request, Response $response) {...p62までの記述
    //     $html = <<<EOF
    //     <html>
    //     <head>
    //     <title>Hello/Index</title>
    //     <style>
    //     body { font-size:16pt, color:#999; }
    //     h1 { font-size:120pt, text-align:right, color:#fafafa; }
    //     </style>
    //     </head>
    //     <body>
    //     <h3>Request</h3>
    //     <pre>{$request}</pre>
    //     <h3>Response</h3>
    //     <pre>{$response}</pre>
    //     </body>
    //     </html>
    //     EOF;

    //     $response->setContent($html);
    //     return $response;
    // }
    
}
