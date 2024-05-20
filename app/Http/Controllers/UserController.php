<?php

namespace App\Http\Controllers;

use App\Models\PortalUser;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = PortalUser::query()
            ->whereType($request->type)
            ->orderBy('name')
            ->get();

        return view('users.index', compact('users'));
    }
}
