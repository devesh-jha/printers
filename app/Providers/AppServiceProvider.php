<?php

namespace App\Providers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $dash = Expense::all();
    $total=0;

    foreach($dash as $item){
         $amp=$item->amount;
        $total+= (int)$amp ;

    }
    View::share('total', $total);


    $income = Income::all();
    $totalincome=0;
    foreach($income as $item){
        $incom = $item->amount;
        $totalincome+=(int)$incom;
    }
    View::share('totalincome', $totalincome);

}
}
