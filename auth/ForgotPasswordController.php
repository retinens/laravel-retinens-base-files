<?php

namespace App\Auth\Controllers;

use App\Common\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset mails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    use SEOTools;

    public function showLinkRequestForm(): View
    {
        $this->seo()->setTitle('Réinitialiser mon mot de passe');
        $this->seo()->setDescription("Réinitialiser mon mot de passe");
        $this->seo()->setCanonical(route('password.request'));
        $this->seo()->opengraph()->setUrl(route('password.request'));

        return view('auth.passwords.email');
    }
}
