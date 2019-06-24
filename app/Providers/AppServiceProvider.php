<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer('*',function($view){
            $view->with([
                'cats' =>Category::where('parent',[0])->orderBy('name','ASC')->get(),
                'cart' => Cart::content()
            ]);
        });
        \Validator::extend('check_old_password', function ($attribute, $value, $parameters, $validator) {

            return \Hash::check($value, \Auth::user()->password);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
