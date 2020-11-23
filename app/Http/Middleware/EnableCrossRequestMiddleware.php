<?php

namespace App\Http\Middleware;

use Closure;

class EnableCrossRequestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Content-Type: text/html;charset=utf-8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:POST,GET,PUT,OPTIONS,DELETE'); // 允许请求的類型
        header('Access-Control-Allow-Credentials: true'); // 設置是否允许發送 cookies
        header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-token,Content-Length,Accept-Encoding,X-Requested-with, Origin,Access-Control-Allow-Methods'); // 設置允许自定義请求
        return $next($request);
    }
}
