<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDetail;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $authUser = Auth::user();
            $details = $authUser ? UserDetail::where('user_id', $authUser->id)->first() : null;
            $view->with(compact('authUser', 'details'));
        });
    }
}
