<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('FrontEnd.include.banner',function($view){
    $view->with('categories', Category::where('category_status',1)->get());
} );

View::composer('FrontEnd.include.dish',function($view){
    $view->with('categories', Category::where('category_status',1)->get());
} );
    }
}
