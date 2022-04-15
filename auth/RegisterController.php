<?php

namespace App\Auth\Controllers;

use App\Common\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Domain\Users\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use SEOTools;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected string $redirectTo = "/mon-compte";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:65', 'unique:users'],
            'password' => ['required', 'string', Password::min(8)->letters()->numbers(), 'confirmed'],
        ]);
    }

    protected function create(array $data): User
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return $user;
    }

    public function showRegistrationForm(): View
    {
        $this->seo()->setTitle('Créez votre compte');
        $this->seo()->setDescription('');

        $this->seo()->setCanonical(route('register'));
        $this->seo()->opengraph()->setUrl(route('register'));

        return view('auth.register');
    }
}
