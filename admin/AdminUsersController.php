<?php

namespace App\Admin\Controllers;

use App\Admin\Requests\UserRequest;
use App\Common\Controllers\Controller;
use Domain\Users\Actions\StoreUserAdminAction;
use Domain\Users\Actions\UpdateUserAdminAction;
use Domain\Users\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class AdminUsersController extends Controller
{
    public function index(): View
    {
        $adminUsers = User::where('type', 'admin')->get();
        return view('admin.pages.admin-users.index')
            ->with(compact('adminUsers'));
    }

    public function create(): View
    {
        return view('admin.pages.admin-users.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($adminUser = User::where('email', $data['email'])->first()) {
            UpdateUserAdminAction::execute($data, $adminUser);
        } else {
            StoreUserAdminAction::execute($data);
        }
        return redirect(route('admin.admin-users.index'));
    }

    public function show(User $adminUser): View
    {
        return view('admin.pages.admin-users.show')
            ->with(compact('adminUser'));
    }

    public function edit(User $adminUser): View
    {
        return view('admin.pages.admin-users.edit')
            ->with(compact('adminUser'));
    }

    public function update(UserRequest $request, User $adminUser): RedirectResponse
    {
        $data = $request->validated();
        UpdateUserAdminAction::execute($data, $adminUser);
        return redirect(route('admin.admin-users.index'));
    }

    public function revoke(User $adminUser): RedirectResponse
    {
        $adminUser->type = 'default';
        $adminUser->save();
        return redirect(route('admin.admin-users.index'));
    }

    public function resetPassword(User $adminUser): RedirectResponse
    {
        $status = Password::sendResetLink(
            ['email' => $adminUser->email]
        );

        toastr()->success("Email de réinitialisation du mot de passe envoyé à {$adminUser->email}.");

        return redirect(route('admin.admin-users.show',$adminUser));
    }
}
