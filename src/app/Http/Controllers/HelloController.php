<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return <<<EOF

        <!DOCTYPE html>
        <html lang="ja">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Hello/Index</title>
        
        </head>
        
        <body>
            <h1 class="h-1">Index</h1>
            <p>これはHelloコントローラのindexアクションです</p>
        </body>
        
        </html>
        EOF;
    }
}
