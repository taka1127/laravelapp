<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        // $data = [
        //     ['name'=>'taro', 'mail'=>'taro@yamada'],
        //     ['name'=>'hanako', 'mail'=>'hanako@flower'],
        //     ['name'=>'sachico', 'mail'=>'sachiko@happy'],
        // ];

        // ミドルウェアの前処理
        // $request->merge(['data'=>$data]);//処理の実行
        // return $next($request);

        // ミドルウェアの後処理p115
        $response = $next($request);// ミドルウェアの後処理
        $content = $response->content();//処理の実行↓
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern,$replace,$content);
        $response->setContent($content);//処理の実行↑
        return $response;//ミドルウェアの後処理
    }
}
