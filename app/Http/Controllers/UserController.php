<?php

namespace App\Http\Controllers;

use App\Models\PortalUser;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = PortalUser::query()->get();

        return view('users.index', compact('users'));
    }
}
