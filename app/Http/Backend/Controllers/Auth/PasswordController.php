<?php

namespace App\Http\Backend\Controllers\Auth;

use App\Http\Backend\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Passwords\PasswordBrokerManager;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    protected $guard = 'admin';

    protected $broker = 'admin';

    protected $redirectTo = '/admin/';

    protected $linkRequestView = 'backend.auth.passwords.email';

    protected $resetView = 'backend.auth.passwords.reset';

    protected $emailView = 'backend.auth.emails.password';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
}
