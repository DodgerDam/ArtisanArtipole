<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class EditionController extends Controller
{

    public function index()
    {
        return view("admin/admin");
    }

    public function show()
    {
        $editions = Edition::select('*')->get();
        return view("admin/editions", compact('editions'));
    }

    public function update(Request $request)
    {
        DB::update("UPDATE editions SET identifier=?, summary=?, content_1=?, content_2=?, content_3=? WHERE id=?",
            [$request->identifier, $request->summary, $request->content_1, $request->content_2, $request->content_3, $request->id]);

        return redirect()->route('admin.show');
    }

    public function remove(Request $request)
    {
        DB::update("DELETE FROM 'editions' WHERE id=?",
            [$request->id]);

        return redirect()->route('admin.show');
    }

    public function usersShow()
    {
        $users = DB::table('users as u')
            ->select('u.*', 'r.name as role_name')
            ->join('roles as r', 'r.id', '=' , 'u.role_id')
            ->get();

        $roles = DB::table('roles as r')
            ->select('*')
            ->get();
        return view("admin/users", compact('users', 'roles'));
    }

    public function userRemove(Request $request)
    {
        DB::update("DELETE FROM 'users' WHERE id=?",
            [$request->id]);

        return redirect()->route('admin.users.show');
    }


}
