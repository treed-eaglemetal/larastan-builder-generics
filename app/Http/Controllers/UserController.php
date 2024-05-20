<?php

namespace App\Http\Controllers;

use App\Models\PortalUser;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = PortalUser::query()->whereType($request->type)->get();

        return view('users.index', compact('users'));
    }
}
