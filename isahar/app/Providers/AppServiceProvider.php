<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Order;

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
        Order::created(function($obj){
            //$obj->name;
            $email=$obj->email;
            $thema='Уважаемый '. $obj->name . ', вам сообщение с сайта isahar.by';
            $body='<h1>Ваша заявка принята</h1>';
            $headers="MINE-Version: 1.0\r\n";
            $headers.="From: isahar.by\r\n";
            $headers.="content-Type: text/plain;charset=utf-8\r\n";
            $headers.="X-Mailer: PHP/" . phpversion();
            @mail($email, $thema, $body, $headers);
        });

    }
}
