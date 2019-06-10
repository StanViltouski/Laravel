<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Order;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Order::created(function($obj){
			//$obj->name;
			$email=$obj->email . ', overnoise@tut.by';
            $thema='Уважаемый '. $obj->name . ', вам сообщение с сайта svdon.com';
            $body='<h1>Ваша заявка принята</h1>';
            $headers="MINE-Version: 1.0\r\n";
            $headers.="From: svdon.com\r\n";
            $headers.="content-Type: text/plain;charset=utf-8\r\n";
            $headers.="X-Mailer: PHP/" . phpversion();
            @mail($email, $thema, $body, $headers);
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
