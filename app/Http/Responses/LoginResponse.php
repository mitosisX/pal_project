<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        if (Auth::user()->role === 'admin') {
            return redirect()
                ->route('admin.index');
        } elseif (Auth::user()->role === 'manager') {
            return redirect()
                ->route('manager.index');
        } elseif (Auth::user()->role === 'driver') {
            return redirect()
                ->route('driver.index');
        } elseif (Auth::user()->role === 'w-manager') {
            return redirect()
                ->route('inventory.index');
        }
    }

    private function getRedirect()
    {
        if (Auth::user()->role_id === 1) return '/admin';
        else if (Auth::user()->role_id === 2) return '/staff';
        else if (Auth::user()->role_id === 3) return '/user';
    }
}
