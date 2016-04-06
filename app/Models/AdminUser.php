<?php

    namespace App\Models;

    use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
    protected $table = 'admin_users';

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address'
    ];

    /**
         * The attributes excluded from the model's JSON form.
         *
         * @var array
         */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guard = "admin";
}
