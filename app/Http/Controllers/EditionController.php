<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditionController extends Controller
{
    public function index() {
        return view('admin/admin');
    }

    public function posts() {
        $posts = DB::table('edition')
            ->select('*')
            ->get();

        return view('admin/posts', compact('posts'));
    }

    public function users() {
        $users = DB::table('users')
            ->select('*')
            ->get();

        return view('admin/users', compact('users'));
    }
}
