<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Searchable;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    use Searchable;

    public function index(Request $request)
    {
        return view('users.index', [
            'users' => $this->search(DB::table('users'), $request)->get()
        ]);
    }

    public function show(int $id)
    {
        return view('users.show', [
            'user' => ($user = DB::table('users')->find($id))?$user:abort(404)
        ]);
    }
}
