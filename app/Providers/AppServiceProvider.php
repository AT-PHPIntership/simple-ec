<?php

namespace App\Providers;

use App\Models\AdminUser;
use App\User;
use Illuminate\Support\ServiceProvider;
use Hash;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::saving(function ($user) {
            if (Hash::needsRehash($user['password'])) {
                $user['password'] = Hash::make($user['password']);
            }
        });

        AdminUser::saving(function ($user) {
            if (Hash::needsRehash($user['password'])) {
                $user['password'] = Hash::make($user['password']);
            }
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
