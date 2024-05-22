<?php

namespace App\Auth\Controllers;

use App\Common\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use SEOTools;
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(): View
    {
        $this->seo()->setTitle('Connexion');
        $this->seo()->setDescription('');
        $this->seo()->setCanonical(route('login'));
        $this->seo()->opengraph()->setUrl(route('login'));

        if (request()->get('redirect_to')) {
            Session::put('url.intended',request()->get('redirect_to'));
        }

        return view('auth.login');
    }
}
