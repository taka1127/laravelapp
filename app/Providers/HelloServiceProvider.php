<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
//オリジナルバリデータの作成
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // ビューコンポーザの設定
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
        );
        //オリジナルバリデータの作成
        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator,$data,$rules,$messages){
        //     return new HelloValidator($translator,$data,$rules,$messages);
        // });
        //Validator::extendの利用
        
        Validator::extend('hello', function($attribute,$value,$parameters,$validator){
            return $value % 2 == 0;
        });
        
        
    }

}
